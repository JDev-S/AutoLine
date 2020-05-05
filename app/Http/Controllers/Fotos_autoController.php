<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Fotos_autoController extends Controller
{
     public function fotos_autos_mostrar()
	{
		fotos=DB::select(' select concat(auto.marca," ",auto.modelo)as carro,auto.id_auto,fotos_auto.foto,fotos_auto.id_foto from auto inner join fotos_auto on fotos_auto.id_foto=auto.id_auto order by auto.id_auto asc');
		return view('/Administrador/Fotos_auto/index',compact('fotos'));
    }
    
    public function fotos_autos_eliminar()
    {
			return view('/Administrador/Fotos_auto/delete');
	}

	public function eliminar(Request $input)
    {
		
		$id_foto=$input['id_show'];

		$query=DB::delete("DELETE FROM fotos_auto WHERE id_foto='$id_foto'");
	
	
		return redirect()->action('Fotos_autoController@fotos_autos_mostrar')->withInput();
	}
    
    
    public function fotos_autos_nuevo()
    {
       return view('/Administrador/Fotos_auto/insert');
    }
	
	public function insertar(Request $input)
	{
        $id_auto = $input['auto_show'];
        $id_especificacion = $input['especificacion_show'];
        $descripcion = $input['descripcion_show'];
        

        $query=DB::insert('insert into descripcion_especificcacion (id_especificacion,id_auto,descripcion) values ( ?, ?, ?)', [ $id_especificacion,$id_auto,$descripcion]);
        return redirect()->action('Fotos_autoController@fotos_autos_mostrar')->withInput();
	
	}

	public function fotos_autos_editar()
    {
			return view('/Administrador/Fotos_auto/edit');
    }

	public function actualizar(Request $input)
	{	    
		    $id_auto=$input['id_show'];
            $id_especificacion = $input['id_show2'];
            $descripcion = $input['descripcion_show'];
       

        $query=DB::update("update descripcion_especificcacion set descripcion='$descripcion' where id_auto=? and id_especificacion=?",[$id_auto,$id_especificacion]);
        return redirect()->action('Fotos_autoController@fotos_autos_mostrar')->withInput();

	}
}

