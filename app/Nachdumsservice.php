<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Nachdumsservice extends Model
{
    use HasFactory;
    protected $fillable = [
        "service_fr", "service_an","description_fr","description_an"
    ];

}
