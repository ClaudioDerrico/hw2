<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{

    public function index(){
        return view("login");
    }


    public function checkLogin(){
         $request = request();
         $user = User::where('username', $request->username) 
         ->where('password',$request->password)
         ->first();
         if($user) {
            Session::put('userid', $user->id);
             return redirect('home2');
         }

         else{
             return redirect('login')->withInput();
         }

    }

    public function logout() {
        Session::flush();
        return redirect('login');
    }

    public function login() {
        if(session('userid') != null) {
            return redirect("home2");
        }
        else {
            return view('login')
            ->with('csrf_token', csrf_token());
        }
     }

}
?>