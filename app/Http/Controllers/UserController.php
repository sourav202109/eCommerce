<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    
    function login(Request $req)
    {
        //return user::all();
        //return user::where(['email'=>$req->email])->first();
       echo $req->password;
        $user= User::where(['email'=>$req->email])->first();
        echo "<pre>";
        print_r($user); 
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
        echo "hell2o";exit;
    }
    
    /*function login(Request $req)
    {
        //return user::all();
        //return user::where(['email'=>$req->email])->first();
        
        $user= User::where(['email'=>$req->email])->first();
        $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    */
}


// {{csrf_field()}}