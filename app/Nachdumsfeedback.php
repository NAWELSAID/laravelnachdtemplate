<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nachdumsfeedback extends Model
{
    use HasFactory;
    protected $fillable = ["name", "photo", "position", "feedback"
];
}
