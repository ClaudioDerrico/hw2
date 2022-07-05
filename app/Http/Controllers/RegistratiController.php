<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegistratiController extends Controller{


    
    public function index() {
        return view('registrati');
    } 

    function register() {

        $request = request();
        if ($this->countErrors($request)==0){
             $newUser = User::create([ 
                'username' => $request['username'],
                'password' => $request['password'],
                'nome' => $request['nome'],
                'cognome' => $request['cognome'],
                'email' => $request['email'],
             ]);

             if($newUser ){
                 Session::put('userid', $newUser->id);  
                 return redirect('home2');
             }

            }
        

        else{
            
            return redirect('registrati')->withInput();
        }
         
    }

    public function checkUsername($username){
        $exists= USER::where('username', $username)-> exists();
        return array(['exists' => $exists]);
    }

    
    private function countErrors($data) {
        $error = array();
        
        # USERNAME
        // Controlla che l'username rispetti il pattern specificato
        if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
            $error[] = "Username non valido";
        } else {
            $username = User::where('username', $data['username'])->first();
            if ($username !== null) {
                $error[] = "Username già utilizzato";
            }
        }
        # PASSWORD
        if (strlen($data["password"]) < 8) {
            $error[] = "Caratteri password insufficienti";
        } 
        # EMAIL
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = User::where('email', $data['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }
        }

        return count($error);
    }


    public function checkEmail($query) {
        $exist = User::where('email', $query)->exists();
        return ['exists' => $exist];
    }



}

?>
