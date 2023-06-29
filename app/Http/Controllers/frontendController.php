<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\category;
use App\Models\message;
use App\Models\upama;
use App\Models\alldone;
use App\Models\team;
use App\Models\setting;
use App\Models\amarecap;
class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $AmaImage = upama::latest()->get();
        $doneAma = alldone::latest()->get();
        $teams = team::latest()->get();
        $setting = setting::first();
        return view(
            'frontend.home.index',
            compact('AmaImage', 'doneAma', 'teams', 'setting')
        );
    }

    public function recap()
    {
        $recaps = amarecap::latest()
            ->take(6)
            ->get();
        return view('frontend.pages.recap', compact('recaps'));
    }
    public function ama()
    {
        $amas = upama::latest()
            ->take(10)
            ->get();
        return view('frontend.pages.ama', compact('amas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.pages.order');
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
            'telegram' => 'required',
            'twitter' => 'required',
            'website' => 'required',
            'ama_date' => 'required',
            'price' => 'required',
        ]);
        $message = new message();
        $message->name = $request->name;
        $message->telegram = $request->telegram;
        $message->twitter = $request->twitter;
        $message->website = $request->website;
        $message->ama_date = $request->ama_date;
        $message->price = $request->price;
        $message->message = $request->message;
        $message->save();
        return back()->with('success', 'Your Order created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $viewrecaps = amarecap::find($slug);
        return view('frontend.pages.singelrecap', compact('viewrecaps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
