<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Homeprofile extends Model
{
    use HasFactory;
    protected $fillable = ["nachd_light", "nachd_dark", "startup_light", "startupdark", "email","facebook","linkedin","logo","localisation","phone"];
}
