<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function ourteams(){
        return view('ourteams');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactusus');
    }
}
