<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Partenaire extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", "logo"
    ];

}
