<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class profiloController extends Controller{

    public function index(){


        if($session_id = session('userid')){
            $user_id = User:: find($session_id); //trova la riga dove id=session_id
            
           
            return view("profilo")->with("userid",$user_id);
        }
    
        else return view("home");
        
    }



   
}
?>