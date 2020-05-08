<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HorarioController extends Controller
{
     public function mostrar_horario()
	{
        $autos=DB::select("select dia,concat(hora_inicial,'-',hora_final)as horas from horario");
		return view('/principal/contacto',compact('autos'));
    }
    
    
    public function horario_mostrar()
	{
		$autos=DB::select("select id_horario,dia,concat(hora_inicial,'-',hora_final)as horas,hora_inicial,hora_final from horario");
		return view('/Administrador/Horario/index',compact('autos'));
    }

	public function horario_editar()
    {
			return view('/Administrador/Horario/edit');
    }

	public function actualizar(Request $input)
	{	    
		    $id=$input['id_show'];
            $hora_inicial=$input['hora1_show'];
            $hora_final=$input['hora2_show'];
    

        $query=DB::update("update horario set hora_inicial='$hora_inicial', hora_final='$hora_final' where id_horario=?",[$id]);
       return redirect()->action('HorarioController@horario_mostrar')->withInput();

	}

}
