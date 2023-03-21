<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    use HasFactory;
    protected $fillable = ["photo", "title_fr", "title_en", "date", "description_fr","description_en","Category"];
}
