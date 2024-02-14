<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("musics")->insert([
            "photo"=>"bg-1.jpg",
            "name"=>"ayse",
           "artist"=>"ayseturan",
            "audio"=>"BLOK3-AFFETMEM",
        ]);
    }
}
