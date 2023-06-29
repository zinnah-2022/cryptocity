<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\upama;
use Illuminate\Support\Facades\File;
class upamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataview = upama::paginate(10);
        return view('backend.pages.upcomming.index', compact('dataview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataview = upama::paginate(10);
        return view('backend.pages.upcomming.create', compact('dataview'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($request->file('image')) {
            $filePath = $request->file('image');
            $fileName = time(). '.' .$filePath->getClientOriginalExtension();

            $filePath->move('images', $fileName);
        }

        $ama = new upama();
        $ama->title = $request->title;
        $ama->image = $fileName;
        $ama->save();

        return redirect()->route('upama.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateData = upama::find($id);
        return view('backend.pages.upcomming.update', compact('updateData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = upama::find($id);
        if ($request->image != null) {
            $image_path = public_path('images/') . $post->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        $image = $request->image;
        $imageName = date('YmdHi') . $image->getClientOriginalName();
        $image->move('images', $imageName);
        $post->title = $request->title;
        $post->image = $imageName;
        $post->save();

        return redirect()->route('upama.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = upama::find($id);
        $image_path = public_path('images/') . $post->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $post->destroy($id);
        return redirect()->back();
    }
}
