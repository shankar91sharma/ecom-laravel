<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password))
        {
          return "<p> Username or password is not matched <a href='/login' class='btn btn-danger'> Back </a></p>";
        }
        else{
            $req->session()->put('user',$user);
           return redirect('/');
        }
    }
}
