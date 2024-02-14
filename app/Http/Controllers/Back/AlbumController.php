<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::orderBy("id")->get();
        return view("back.pages.albums.index",compact("albums"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("back.pages.albums.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $albums = new Album();
        $albums->id = $request->id;
        $albums->name = $request->name;
        $albums->tür = $request->tür;
        $albums->category = $request->category;
        $albums->photo=$request->photo;
        if ($request->hasFile("photo")) {
            $path = public_path("images/");
            $name = Str::random(10);
            $file = $request->file("photo");
            $name .= $name . $file->getClientOriginalName();
            $file->move($path, $name);
            $albums->photo = $name;
        }
        $albums->save();
        return redirect()->route("admin.album.index");
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

        $albums=Album::find($id);
        return view("back.pages.albums.edit",compact("albums"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $albums = new Album();
        $albums->id = $request->id;
        $albums->name = $request->name;
        $albums->tür = $request->tür;
        $albums->category = $request->category;
        $albums->photo=$request->photo;
        if ($request->hasFile("photo")) {
            $path = public_path("images/");
            $name = Str::random(10);
            $file = $request->file("photo");
            $name .= $name . $file->getClientOriginalName();
            $file->move($path, $name);
            $albums->photo = $name;
        }
        $albums->save();
        return redirect()->route("admin.album.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::find($id);
        if (isset($album)) {
            $album->delete();
        }
        return redirect()->route("admin.album.index");
    }
}
