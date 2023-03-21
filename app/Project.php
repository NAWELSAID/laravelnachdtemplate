<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    use HasFactory;
    protected $fillable = ["photo", "titre_fr", "titre_en", "date","description_fr","description_en", "category"];
}
