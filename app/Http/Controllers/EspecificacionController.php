<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

class EspecificacionController extends Controller
{
    public function especificacion_mostrar()
	{
		$especificaciones=DB::select('select * from especificacion');
		return view('/Administrador/Especificacion/index',compact('especificaciones'));
    }
    
    public function especificacion_eliminar()
    {
			return view('/Administrador/Especificacion/delete');
	}

	public function eliminar(Request $input)
    {
		
		$id=$input['id_show'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM especificacion WHERE id_especificacion='$id'");
	
	
		return redirect()->action('EspecificacionController@especificacion_mostrar')->withInput();
	}
    
    
    public function especificacion_nuevo()
    {
       return view('/Administrador/Especificacion/insert');
    }
	
	public function insertar(Request $input)
	{
       
        $especificacion= $input['especificacion_show'];

        $query=DB::insert('insert into especificacion (id_especificacion,especificacion) values ( ?, ?)', [null, $especificacion]);
        return redirect()->action('EspecificacionController@especificacion_mostrar')->withInput();
	
	}

	public function especificacion_editar()
    {
			return view('/Administrador/Especificacion/edit');
    }

	public function actualizar(Request $input)
	{	    
		    $id=$input['id_show'];
           $especificacion= $input['especificacion_show'];

        $query=DB::update("update especificacion set especificacion='$especificacion' where id_especificacion=?",[$id]);
       return redirect()->action('EspecificacionController@especificacion_mostrar')->withInput();

	}

}
