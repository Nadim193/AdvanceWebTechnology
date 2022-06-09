<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationPageController extends Controller
{
    public function registration(){
        return View('registration');
    }
}
