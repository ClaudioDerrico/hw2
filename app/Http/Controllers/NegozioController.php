<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class NegozioController extends Controller{


    
    public function index() {
        $items=Cart::get();
        $carrello=array();
        $totale=0;
        
         $carrello=Session::get('cart');
        if (request('add_to_cart')!==null){
           

            if(Session::get('cart')!==null){
                
              $session_array_id= array_column(Session::get('cart'),"id"); // array column vuole un input e una column key
        
        
              if(!in_array(request('id'), $session_array_id)){ //controlla se dentro l'array è presente l'id di session_array_id
        
                $session_array = array(
                    'id'=> request('id'),
                    "name"=>request('name'),
                    "price"=>request('price'),
                    "quantity"=>request('quantity'),
                    "tot"=>request('price')*request('quantity')
                    
                );
               
        
                $carrello[] = $session_array;
                Session::put('cart', $carrello);
               
              }
        
            }
            else{
                $session_array = array(
                    'id'=> request('id'),
                    "name"=>request('name'),
                    "price"=>request('price'),
                    "quantity"=>request('quantity'),
                    "tot"=>request('price')*request('quantity'),
                    
                    
                );
                
        
                $carrello[] = $session_array;
                Session::put('cart', $carrello);
            }
        }

      

        if($carrello==NULL)
        $carrello=array();

        

        if(request('action')!==null){
            if(request('action') == "clearall"){
                // Session::flush();
                $carrello=array();
                Session::put('cart',$carrello);
            }
        
            if(request('action') == "remove"){
        
                foreach($carrello as $key=>$value){
        
                    if($value['id'] == request('id')){

                        
                        
                        
                         unset($carrello[$key]);
                         Session::put('cart',$carrello);
                         // $carrello[$key]=null;
                        //$carrello->session()->forget('key');
         
                    }
                }
               
            }
        }

        foreach($carrello as $merce){
            $totale+=$merce["tot"];
            
        }
        
        return view('negozio')->with("items",$items)->with("carrello",$carrello)->with("totale",$totale);
    } 



    
    



}


