<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [ "name_fr", "name_en","icon" ,"description_fr","description_en","order"];
}
