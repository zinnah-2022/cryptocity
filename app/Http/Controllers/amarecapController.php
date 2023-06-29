<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\amarecap;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
class amarecapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataview = amarecap::paginate(10);
        return view('backend.pages.amarecap.index', compact('dataview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataview = amarecap::paginate(10);
        return view('backend.pages.amarecap.create', compact('dataview'));
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
            'title' => 'required|unique:amarecaps',
            'body' => 'required',
            'image' => 'required',
        ]);
        if ($request->file('image')) {
            $filePath = $request->file('image');
            $fileName = time(). '.' .$filePath->getClientOriginalExtension();

            $filePath->move('images', $fileName);
        }

        $amarecap = new amarecap();
        $amarecap->title = $request->title;
        $amarecap->slug = Str::slug($request->title, '-');
        $amarecap->image = $fileName;
        $amarecap->body = $request->body;
        $amarecap->save();

        return redirect()->route('amarecap.index');
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
        $updateData = amarecap::find($id);
        return view('backend.pages.amarecap.update', compact('updateData'));
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
        $post = amarecap::find($id);

        if($request->image != null){
            $image_path = public_path('images/') . $post->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }


        $image = $request->image;
        $imageName = date('YmdHi') . $image->getClientOriginalName();
        $image->move('images', $imageName);

        $post->title = $request->title;
        $post->slug = Str::slug($request->title, '-');
        $post->image = $imageName;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('amarecap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = amarecap::find($id);
        $image_path = public_path('images/') . $post->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $post->destroy($id);
        return redirect()->back();
    }
}
