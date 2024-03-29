<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AuthController;
use App\Http\Controllers\Back\AppController;
use App\Http\Controllers\Back\PhotoController;
use App\Http\Controllers\Back\AlbumController;
use App\Http\Controllers\Back\MusicController;
use App\Http\Controllers\Back\CommentsController;
use App\Http\Controllers\Back\NewsController;
/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
*/

Route::get("/panel",[AppController::class,"dashboard"])->name("anasayfa");
Route::get("galeri",[PhotoController::class,"index"])->name("admin.fotograflar.index");
Route::get("galeriolustur",[PhotoController::class,"create"])->name("admin.fotograflar.create");
Route::get("galeri/edit/{id}",[PhotoController::class,"edit"])->name("admin.fotograflar.edit");
Route::get("galeri/destroy/{id}",[PhotoController::class,"destroy"])->name("admin.fotograflar.destroy");
Route::post("anasayfa/store",[PhotoController::class,"store"])->name("admin.fotograflar.store");
Route::get("anasayfa/destroy/{id}",[PhotoController::class,"destroy"])->name("admin.fotograflar.destroy");

Route::get("album",[AlbumController::class,"index"])->name("admin.album.index");
Route::get("albumekle",[AlbumController::class,"create"])->name("admin.album.create");
Route::get("album/edit/{id}",[AlbumController::class,"edit"])->name("admin.album.edit");
Route::post("albumyenile",[AlbumController::class,"update"])->name("admin.album.update");
Route::get("album/destroy/{id}",[AlbumController::class,"destroy"])->name("admin.album.destroy");
Route::post("album/store",[AlbumController::class,"store"])->name("admin.album.store");

Route::get("şarkılar",[MusicController::class,"index"])->name("admin.music.index");
Route::get("şarkı/ekle",[MusicController::class,"create"])->name("admin.music.create");
Route::get("şarkı/destroy/{id}",[MusicController::class,"destroy"])->name("admin.music.destroy");
Route::post("şarkı/store",[MusicController::class,"store"])->name("admin.music.store");

Route::get("yorumlar",[CommentsController::class,"index"])->name("admin.yorum.index");
Route::get("yorumlar/{id}",[AppController::class,"görüntüle"])->name("admin.görüntüle.index");
Route::get("yorum/destroy/{id}",[CommentsController::class,"destroy"])->name("admin.yorum.destroy");

Route::get("haber",[NewsController::class,"index"])->name("admin.haber.index");
Route::get("haber/ekle",[NewsController::class,"create"])->name("admin.haber.create");
Route::get("haber/edit/{id}",[NewsController::class,"edit"])->name("admin.haber.edit");
Route::post("haber/yenile",[NewsController::class,"update"])->name("admin.haber.update");
Route::get("haber/destroy/{id}",[NewsController::class,"destroy"])->name("admin.haber.destroy");
Route::post("haber/store",[NewsController::class,"store"])->name("admin.haber.store");

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

Route::group(["Middleware"=>"sitesetting"],function (){
    Route::get("/",[HomeController::class,"site"])->name("site");
    Route::post("/giris1",[AuthController::class, "loginPost"])->name("admin.login.post");
    Route::get("/anasayfa",[HomeController::class,"anasayfa"])->name("anasayfa");
    Route::get("/albumler",[HomeController::class,"albums"])->name("albumler");
    Route::get("/favoriler",[HomeController::class,"favoriler"])->name("favoriler");
    Route::get("/konserler",[HomeController::class,"konserler"])->name("konserler");
    Route::get("/arama",[HomeController::class,"searc"])->name("arama");
    Route::post("/yorumYap",[HomeController::class,"store"])->name("yorum.store");
    Route::post("/favoriler/ekle",[HomeController::class,"store2"])->name("favori.store");


    Route::get("/login",[HomeController::class,"login"])->name("giris");
    Route::get("/register",[HomeController::class,"register"])->name("kayıt");
});
Route::post("/kayıt1",[AuthController::class, "store"])->name("admin.register.store");
Route::get("/logout",[AuthController::class,"logout"])->name("logout");




