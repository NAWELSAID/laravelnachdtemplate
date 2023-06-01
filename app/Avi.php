<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Avi extends Model
{
    use HasFactory;
    protected $fillable = ["name", "photo", "position_fr", "feedback_fr", "position_en","feedback_en"
];
}
