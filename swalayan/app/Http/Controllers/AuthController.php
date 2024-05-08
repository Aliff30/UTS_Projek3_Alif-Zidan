<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(){
        return view('register');
    }

    public function registerSimpan(Request $request){
        Validator::make($request->all(),
       [ 'username'=>'required',
        'password'=>'required',
        'email'=>'required',
        'role'=>'required|confirmed',]
)->validate();
    }
}
