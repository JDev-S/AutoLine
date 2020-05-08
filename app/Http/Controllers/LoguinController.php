<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoguinController extends Controller
{
    public function login(Request $input)
    {
            $nombre=$input['nombre'];
            $password=$input['pass'];
            $valor='';
            //Autoline_salamanca   //carlos
            if($nombre=='admin' && $password=='12345')
            {
                $mensaje='Si estuvo correctamente';
                return view('/Administrador/index',compact('mensaje'));
            }
            else
            {
                $mensaje= 'Usuario Y/o contraseña con incorrectos.';
                $valor='login';
                return redirect()->back();
            }        
    }
    
}
