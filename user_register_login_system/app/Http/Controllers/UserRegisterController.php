<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index(){
        return view('register.register-page');
    }
}
