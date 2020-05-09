<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use DB;

class LoguinController extends Controller
{
    public function login(Request $input)
    {
        $email = $input['email'];
    $contrasenia = $input['pass'];
   
    


        
            
            if ($email=='autoline@gmail.com' && $contrasenia=='12345') {

           //echo 'essta registrado';
            Session::put('email',$email);
            Session::put('contrasenia',$contrasenia);
            $correo=Session::get('email');
            $pass=Session::get('contrasenia');
            //echo '<br/>';
            //echo $correo."          ".$pass;
            return redirect('/Admin_contacto');



            }else{
                return redirect('/Admin_login');
            }


    }
    
    public function Logout()
	{
		
		Session::flush();
		return redirect('/Admin_login');
	}
    
}
