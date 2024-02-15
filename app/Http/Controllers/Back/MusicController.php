<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musics = Music::orderBy("id")->get();
        return view("back.pages.musics.index",compact("musics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("back.pages.musics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $musics = new Music();
        $musics->id = $request->id;
        $musics->name = $request->name;
        $musics->artist = $request->artist;
        $musics->audio = $request->audio;
        $musics->photo = $request->photo;
        if ($request->hasFile("photo")) {
            $path = public_path("images/");
            $name = Str::random(10);
            $file = $request->file("photo");
            $name .= $name . $file->getClientOriginalName();
            $file->move($path, $name);
            $musics->photo = $name;
        }
        $musics->save();
        return redirect()->route("admin.music.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
