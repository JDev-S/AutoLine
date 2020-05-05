<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ControllerAuto extends Controller
{
      public function mostrar_autos_index()
	{
		$autos=DB::select('select * from auto inner join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion WHERE auto.id_auto in ( SELECT * FROM ( SELECT auto.id_auto FROM auto ORDER BY auto.id_auto asc limit 6 ) as t )order by auto.id_auto');
		return view('/principal/index',compact('autos'));
    }
}
