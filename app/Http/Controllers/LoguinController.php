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
                $contacto=DB::select("select contacto.nombre,contacto.correo,contacto.telefono,contacto.precio,concat (auto.marca,' ',auto.modelo)as carro from contacto inner join auto on auto.id_auto=contacto.id_auto");
                return view('/Administrador/index',compact('contacto'));
            }
            else
            {
                $mensaje= 'Usuario Y/o contraseña con incorrectos.';
                $valor='login';
                return redirect()->back();
            }        
    }
    
    
    public function mostrar_contactos()
    {
          $contacto=DB::select("select contacto.nombre,contacto.correo,contacto.telefono,contacto.precio,concat (auto.marca,' ',auto.modelo)as carro from contacto inner join auto on auto.id_auto=contacto.id_auto");
                return view('/Administrador/index',compact('contacto'));
        
    }
    
}
