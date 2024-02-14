<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Music;
use App\Models\Photo;

class HomeController extends Controller
{


    public function site(){

    return view("front.site");

}


    public function anasayfa(){

        $photos = Photo::orderBy("id")->get();
        return view("front.pages.homepage",compact("photos"));

    }


    public function login(){

        return view("front.pages.auth.login");

    }
    public function register(){

    return view("front.pages.auth.register");

}

    public function searc(){

        $musics = Music::where("id")->get();
        return view("front.pages.discover",compact("musics"));

    }

    public function albums(){

        $albums = Album::orderBy("id")->get();
        return view("front.pages.albums",compact("albums"));

    }
    public function favoriler(){

        return view("front.pages.favorites");

    }
    public function konserler(){

        return view("front.pages.news");

    }
}
