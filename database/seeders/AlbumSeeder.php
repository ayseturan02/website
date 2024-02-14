<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("albums")->insert([
            "photo"=>"bg-1.jpg",
            "name"=>"ayse",
            "category"=>".a",
            "tür"=>"rock",
        ]);
    }
}
