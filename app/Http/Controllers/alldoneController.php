<?php

namespace App\Http\Controllers;
use App\Models\alldone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class alldoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataview = alldone::paginate(10);
        return view('backend.pages.alldone.index', compact('dataview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataview = alldone::paginate(10);
        return view('backend.pages.alldone.create', compact('dataview'));
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

        $alldone = new alldone();
        $alldone->title = $request->title;
        $alldone->image = $fileName;
        $alldone->save();

        return redirect()->route('alldone.index');
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
        $updateData = alldone::find($id);
        return view('backend.pages.alldone.update', compact('updateData'));
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
        $post = alldone::find($id);
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

        return redirect()->route('alldone.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = alldone::find($id);
        $image_path = public_path('images/') . $post->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $post->destroy($id);
        return redirect()->back();
    }
}
