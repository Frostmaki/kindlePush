<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Login
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return view('/');
        }
        return 'false';
    }



    //Register
    public function showRegisterForm(){
        return view('auth.register');
    }


    public function register(Request $request,User $user){
        $user=DB::table('users')->insert([
         ['name'=>$request->name],
         ['email'=>$request->email],
         ['password'=>bcrypt($request->password)],
        ]);
        session()->flash('success','操作成功!');
        return view('/');
    }
}
