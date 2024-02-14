<?php

namespace Database\Seeders;

use App\Models\Auth;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name"=>"ayseturan",
            "email"=>"ayse0025turan@gmail.com",
            "password"=>bcrypt("ayse1020")
        ]);
    }
}
