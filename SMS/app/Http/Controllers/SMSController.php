<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function about(){
        return view('frontEnd.about.about');
    }
    public function course(){
        return view('frontEnd.course.course');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }

}
