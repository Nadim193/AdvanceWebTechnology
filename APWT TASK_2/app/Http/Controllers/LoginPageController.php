<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function login(){
        return View('login');
    }
}
