<?php

namespace App\Http\Controllers;

use App\About;
use App\Article;
use App\Avi;
use App\CategorisPoste;
use App\CategorisStori;
use App\CategoryProject;
use App\Contact;
use App\Formulair;
use App\Homeprofile;
use App\Membre;
use App\Nachdum;
use App\Nachdumsfeedback;
use App\Nachdumsservice;
use App\Partenaire;
use App\PhotoArrierePlan;
use App\Profile;
use App\Project;
use App\Service;
use App\Story;
use Illuminate\Http\Request;

class NachdController extends Controller
{
    public function story()
    {
        return Story::all();
    }
    public function laststory()
    {
        return Story::latest()->take(8)->get();
    }
    public function last4story()
    {
        return Story::latest()-> offset(4)->limit(6)->get();

    }
    public function last8story()
    {
        return Story::latest()-> offset(8)->limit(4)->get();

    }
    public function alllaststory()
    {
        return Story::latest()->get();
    }
    public function post()
    {
        return Article::all();
    }
    public function lastpost()
    {
        return Article::latest()->take(4)->get();
    }
    public function service ()
    {
        /*     Service::all(); service par ordr*/
        return  Service::orderBy('order')->get();
    }
/*     public function lastservice ()
    {
        return  Service::where('order')->first();
    } */
    public function Categoristory ()
    {
        return CategorisStori::all();
    }
    public function  Categoripost()
    {
        return CategorisPoste::all();
    }
    public function project()
    {
        return Project::all();
    }
    public function lastproject()
    {
        return Project::whereYear('created_at' , '2023')->latest()->take(6)->get();
    }
    public function byproject($id)
    {
        return Project::where('category' , $id)->latest()->take(6)->get();
    }
    public function  Categoriproject()
    {
        return CategoryProject ::all();
    }
    public function  profile()
    {
        return Homeprofile ::first();
    }
    public function  nachdum()
    {
        return Nachdum ::first();
    }
    public function membre()
    {
        return Membre::all();
    }
    public function feedback()
    {
        return Avi::latest()->take(6)->get();
    }
    public function ariereplan()
    {
        return PhotoArrierePlan::first();
    }
    public function  partenaire()
    {
        return Partenaire ::all();
    }
    public function aboutus()
    {
        return About::first();
    }
    public function  nachdumservice()
    {
        return Nachdumsservice ::all();
    }
    public function nachdumsfeedback()
    {
        return Nachdumsfeedback::latest()->take(6)->get();
    }
    public function contact(Request $request)
    {

        $contact=new Contact();
        $contact->name =$request->name;
        $contact->email =$request->email;
        $contact->phone =$request->countryCode.$request->phone;
        $contact->demande =$request->demande;
        $contact->save();
        return ['result'=> 'success'];

        /* {
            key : value
        } */
    }

}
