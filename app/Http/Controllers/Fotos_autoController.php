<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Fotos_autoController extends Controller
{
     public function fotos_autos_mostrar()
	{
		$fotos=DB::select(' select concat(auto.marca," ",auto.modelo)as carro,auto.id_auto,fotos_auto.foto,fotos_auto.id_foto from auto inner join fotos_auto on fotos_auto.id_auto=auto.id_auto order by auto.id_auto asc ');
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
        $query2=DB::select("select *  FROM auto WHERE id_auto='$id_auto'");
           
         $marca=$query2[0]->marca;
         $modelo=$query2[0]->modelo;
    
         if($input->hasFile('foto_show'))
         {
             $file=$input->file('foto_show');
             $name=time().$marca."_".$modelo;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
              
                 $query=DB::insert('insert into fotos_auto (id_foto,foto,id_auto) values ( ?, ?, ?)', [ null,$foto,$id_auto]);
        return redirect()->action('Fotos_autoController@fotos_autos_mostrar')->withInput();
	
         }
	}

	public function fotos_autos_editar()
    {
			return view('/Administrador/Fotos_auto/edit');
    }

	public function actualizar(Request $input)
	{	    
		    $id_foto=$input['id_show'];
            $foto = $input['foto_show'];
       
        //UPDATE `fotos_auto` SET `foto` = 'img34' WHERE `fotos_auto`.`id_foto` = 1;
        $query=DB::update("update fotos_auto set foto='$foto' where id_foto=?",[$id_foto]);
        return redirect()->action('Fotos_autoController@fotos_autos_mostrar')->withInput();

	}
}

