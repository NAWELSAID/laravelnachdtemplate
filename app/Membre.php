<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Membre extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", "photo", "position", "linkedin", "facebook", "cv"
    ];
}
