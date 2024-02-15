<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table  = "musics";

    protected $fillable = [
        'name',
        'photo',
        'artist',
        'audio',
    ];
}
