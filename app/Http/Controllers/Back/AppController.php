<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AppController extends Controller
{
      public function dashboard(){

          return view("back.pages.homepage");
      }


      public function görüntüle(){

          $comments = DB::table('comments')
              ->select( 'yorum')
              ->get();
          return view("back.pages.comments.view",compact("comments"));
      }
}
