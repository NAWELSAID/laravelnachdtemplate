<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        "slidetitle_fr", "slidetitle_an", "description_fr", "description_an",
         "slide_content_fr", "slide_content_an", "awards","nb_clients","nb_projects"
         ,"our_history_fr","our_history_an","map","nachdit_FB","icon_nachd_it","nachdit_mail"
         ,"nachdit_adress","icon_startupact","nachdit_linkedin","icon_nachd_it_dark","icon_startupact_dark",
         "icon_awards","icon_nb_projects","icon_nb_clients"

    ];
}
