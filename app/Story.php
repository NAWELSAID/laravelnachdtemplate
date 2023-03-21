<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Story extends Model
{
    use HasFactory;
    
    protected $fillable = [ "photo", "title_fr","title_en" ,"date","photo_deux","photo_trois","photo_quatre","category"];
}
