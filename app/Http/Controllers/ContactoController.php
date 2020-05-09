<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactoController extends Controller
{
        public function contacto_mostrar()
	{
		  
          $contacto=DB::select("select contacto.nombre,contacto.correo,contacto.telefono,contacto.precio,concat (auto.marca,' ',auto.modelo)as carro from contacto inner join auto on auto.id_auto=contacto.id_auto");
                return view('/Administrador/Contacto/index',compact('contacto'));
        
    
    }
}
