<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AlimentazioneController extends Controller{

    public function index(){
        return view("alimentazione");
    }

    public function api($query){

        $app_key= "1c354f8eeb34c2b9fc6dca11ee08cc1b";
        $app_id= "089928d3";

        $api=Http::get("https://api.edamam.com/api/food-database/v2/parser?",[
            "app_id"=>$app_id,
            "app_key"=>$app_key,
            "ingr"=>$query,
            "nutrition-type"=>"cooking",


        ]);
        return $api;




    }

}
?>