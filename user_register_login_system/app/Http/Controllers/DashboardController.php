<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard.dashboard',[
           'users'=> User::all()
        ]);
    }
}
