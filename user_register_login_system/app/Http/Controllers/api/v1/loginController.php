<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login( Request $request){
        $login = $request ->validate([
            'email'=>'required|string',
            'password'=> 'required|string',
        ]);
        if( !Auth::attempt($login)){
            return response(['message'=>'invalid Api key']);
        }

        return response(['message'=>'You are loged in']);
    }
}
