<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(request $req)
    {
        //$user= User::where(['email'=>$req->email])->first();
        $user = User::where('email', '=', $req->email)->first(); 
        //echo "password:".$req->password;
        echo "<pre>";
        print_r($user);
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "User name password not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
