<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Comments;
use App\Models\Music;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{


    public function site(){

    return view("front.site");

}


    public function anasayfa(){


        $musics = Music::where("id","1")->get();
        $albums = Album::orderBy("id","ASC")->get();
        $photos = Photo::orderBy("id")->get();
        return view("front.pages.homepage",compact("photos","albums","musics"));

    }


    public function login(){

        return view("front.pages.auth.login");

    }
    public function register(){

    return view("front.pages.auth.register");

}

    public function searc(){

        $musics = Music::orderBy("id")->get();
        return view("front.pages.discover",compact("musics"));

    }

    public function albums(){

        $musics = Music::orderBy("id")->get();
        $albums = Album::orderBy("id")->get();
        return view("front.pages.albums",compact("albums","musics"));

    }
    public function favoriler(){

        return view("front.pages.favorites");

    }
    public function konserler(){

        return view("front.pages.news");

    }

    public function store(Request $request){

        $comments = new Comments();
        $comments ->id = $request->id;
        $comments ->name = $request->name;
        $comments ->email = $request->email;
        $comments ->subject = $request->subject;
        $comments ->yorum = $request->yorum;
        $comments ->save();
        return redirect()->route("anasayfa");

    }
    public function store2(Request $request){

        $favorites = new Comments();
        $favorites ->id = $request->id;
        $favorites ->name = $request->name;
        $favorites ->email = $request->email;
        $favorites ->subject = $request->subject;
        $favorites ->yorum = $request->yorum;
        $favorites ->save();
        return redirect()->route("anasayfa");

    }


}
