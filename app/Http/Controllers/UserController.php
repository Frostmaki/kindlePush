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
            return view('home');
        }
        return 'false';
    }



    //Register
    public function showRegisterForm(){
        return view('auth.register');
    }


    public function register(Request $request,User $user){
        $request->validate([
            'name'=>'required|min:4',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:6|confirmed'
        ]);
        /*
        $user=DB::table('users')->insert([
         ['name'=>$request->name],
         ['email'=>$request->email],
         ['password'=>bcrypt($request->password)],
        ]);
        */
        DB::insert(
           'insert into users (name,email,password) values (?,?,?)',[$request->name,$request->email,bcrypt($request->password)]);
        session()->flash('success','操作成功!');
        return view('home');
    }
}
