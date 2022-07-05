<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AllenamentoController extends Controller{

    public function index(){
        return view("allenamento");
    }

}
?>