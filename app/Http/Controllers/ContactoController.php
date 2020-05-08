<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactoController extends Controller
{
         public function contacto_mostrar()
	{
		$contactos=DB::select('select concat(auto.marca," ",auto.modelo)as carro,contacto.correo,contacto.telefono,contacto.nombre,contacto.precio,contacto.status from contacto inner join auto on auto.id_auto=contacto.id_auto');
             
		return view('/Administrador/Contacto/index',compact('contactos'));
    }
}
