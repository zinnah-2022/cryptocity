<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\team;
use Illuminate\Support\Facades\File;
class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataview = team::paginate(6);
        return view('backend.pages.team.index', compact('dataview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataview = team::paginate(6);
        return view('backend.pages.team.create', compact('dataview'));
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
            'name' => 'required',
            'image' => 'required',
        ]);

        if ($request->file('image')) {
            $filePath = $request->file('image');
            $fileName = time(). '.' .$filePath->getClientOriginalExtension();

            $filePath->move('images', $fileName);
        }

        $team = new team();
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->telegram = $request->telegram;
        $team->twitter = $request->twitter;
        $team->image = $fileName;
        $team->save();

        return redirect()->route('team.index');
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
        $updateData = team::find($id);
        return view('backend.pages.team.update', compact('updateData'));
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
        $post = team::find($id);
        if ($request->image != null) {
            $image_path = public_path('images/') . $post->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }

        $image = $request->image;
        $imageName = date('YmdHi') . $image->getClientOriginalName();
        $image->move('images', $imageName);

        $post->name = $request->name;
        $post->designation = $request->designation;
        $post->telegram = $request->telegram;
        $post->twitter = $request->twitter;
        $post->image = $imageName;
        $post->save();

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = team::find($id);
        $image_path = public_path('images/') . $post->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $post->destroy($id);
        return redirect()->back();
    }
}
