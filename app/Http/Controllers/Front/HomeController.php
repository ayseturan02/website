<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Music;
use App\Models\Photo;
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
}
