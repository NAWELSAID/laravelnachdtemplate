<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class About extends Model
{
    use HasFactory;
    protected $fillable = [
"slide_title_fr", "slide_title_an", "description_fr	", "description_an", "slide_content_fr",
"slide_content_an","awards","nb_clients","nb_projects","our_history_fr","our_history_an","map"
,"iconawards","iconprojects","iconclients","photo_description","videohistory"];
}
