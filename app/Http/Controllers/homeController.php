<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   

class homeController extends Controller
{
    public function home()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.sections.about');
    }

    public function services()
    {
        return view('home.sections.services');
    }

   
    public function contact()
    {
        return view('home.sections.contact');
    }

    public function designers()
    {
        return view('home.sections.designers');
    }

    public function studios()
    {
        return view('home.sections.studios');
    }
    
    
    



}
