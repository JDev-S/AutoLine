<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Descripcion_especificacionController extends Controller
{
      public function descripcion_especificacion_mostrar()
	{
		$descripcion=DB::select(' select descripcion_especificcacion.id_especificacion,descripcion_especificcacion.id_auto,descripcion_especificcacion.descripcion,concat(auto.marca," ",auto.modelo)as carro,especificacion.especificacion from descripcion_especificcacion inner join auto on auto.id_auto=descripcion_especificcacion.id_auto inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion');
		return view('/Administrador/Descripcion_especificacion/index',compact('descripcion'));
    }
    
    public function descripcion_especificacion_eliminar()
    {
			return view('/Administrador/Descripcion_especificacion/delete');
	}

	public function eliminar(Request $input)
    {
		
		$id_auto=$input['id_show'];
        $id_especificacion=$input['id_show2'];
            
        //DELETE FROM `descripcion_especificcacion` WHERE `descripcion_especificcacion`.`id_especificacion` = 1 AND `descripcion_especificcacion`.`id_auto` = 14"?
		$query=DB::delete("DELETE FROM descripcion_especificcacion WHERE id_especificacion='$id_especificacion' and id_auto='$id_auto'");
	
	
		return redirect()->action('Descripcion_especificacionController@descripcion_especificacion_mostrar')->withInput();
	}
    
    
    public function descripcion_especificacion_nuevo()
    {
       return view('/Administrador/Descripcion_especificacion/insert');
    }
	
	public function insertar(Request $input)
	{
        $id_auto = $input['auto_show'];
        $id_especificacion = $input['especificacion_show'];
        $descripcion = $input['descripcion_show'];
        

        $query=DB::insert('insert into descripcion_especificcacion (id_especificacion,id_auto,descripcion) values ( ?, ?, ?)', [ $id_especificacion,$id_auto,$descripcion]);
        //return redirect()->action('Descripcion_especificacionController@descripcion_especificacion_mostrar')->withInput();
	
	}

	public function descripcion_especificacion_editar()
    {
			return view('/Administrador/Descripcion_especificacion/edit');
    }

	public function actualizar(Request $input)
	{	    
		    $id_auto=$input['id_show'];
            $id_especificacion = $input['id_show2'];
            $descripcion = $input['descripcion_show'];
       

        $query=DB::update("update descripcion_especificcacion set descripcion='$descripcion' where id_auto=? and id_especificacion=?",[$id_auto,$id_especificacion]);
        return redirect()->action('Descripcion_especificacionController@descripcion_especificacion_mostrar')->withInput();

	}
    
    
    public function especificaciones_faltantes(Request $input)
    {
        /*select especificacion.id_especificacion,especificacion.especificacion from especificacion where especificacion.id_especificacion not in (SELECT descripcion_especificcacion.id_especificacion from descripcion_especificcacion where descripcion_especificcacion.id_auto=26)*/
         $id_auto=$input['id_auto'];
        //echo $id_auto;
       
         $query=DB::select("select especificacion.id_especificacion,especificacion.especificacion from especificacion where especificacion.id_especificacion not in (SELECT descripcion_especificcacion.id_especificacion from descripcion_especificcacion where descripcion_especificcacion.id_auto=$id_auto)");
        
       
      $json= json_encode($query);
         
        return response()->json([$json]);
        
        
    }
}
