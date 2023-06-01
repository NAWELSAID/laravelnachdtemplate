<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nachdum extends Model
{
    use HasFactory;
    protected $fillable = ["icon_nachdums", "introduction_fr", "introduction_en", "description_fr", "line","description_en","multi_photo"
 ,"devolope_par","date","video","domainedapplication_fr","domainedapplication-en"
];
}
