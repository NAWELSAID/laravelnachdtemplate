<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PhotoArrierePlan extends Model
{
    use HasFactory;
    protected $fillable = [
        "home", "aboutu", "menu","stori", "articule", "project", "nachdums","bandarticle","bandproject","backgroundimage","homebackground","francais","anglais"
    ];

}
