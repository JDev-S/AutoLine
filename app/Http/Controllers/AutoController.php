<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutoController extends Controller
{
      public function mostrar_autos_index()
	{
		$autos=DB::select("SELECT * from ((select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion WHERE auto.id_auto in ( SELECT auto.id_auto FROM ( SELECT auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto FROM auto) as t where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') order by auto.id_auto)

UNION

(select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto left join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where auto.id_auto not in(select descripcion_especificcacion.id_auto from descripcion_especificcacion inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') GROUP by id_auto)) as t where id_auto in (SELECT id_auto from (select * from auto limit 6) as t) order by id_auto");
		return view('/principal/index',compact('autos'));
    }
    
    
     public function autos_mostrar()
	{
		$autos=DB::select('select * from auto');
		return view('/Administrador/Auto/index',compact('autos'));
    }
    
    public function auto_eliminar()
    {
			return view('/Administrador/Auto/delete');
	}

	public function eliminar(Request $input)
    {
		
		$id=$input['id_show'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM auto WHERE id_auto='$id'");
	
	
		return redirect()->action('AutoController@autos_mostrar')->withInput();
	}
    
    
    public function clases_nuevo()
    {
       return view('/Administrador/Auto/insert');
    }
	
	public function insertar(Request $input)
	{
        $marca = $input['marca_show'];
        $modelo = $input['modelo_show'];
        $precio = $input['precio_show'];
        $foto= $input['foto_show'];

        $query=DB::insert('insert into auto (marca,modelo,precio,foto) values ( ?, ?, ?, ?)', [null, $nombre,$url,$resultado,$curso]);
        return redirect()->action('ClasesController@clases_mostrar')->withInput();
	
	}

	public function clases_editar()
		{
			return view('/Admin/Clases/edit');
		}

	public function actualizar(Request $input)
	{	
		$id=$input['id_show'];
        $nombre = $input['nombre_show'];
        $url = $input['url_show'];
		
		
		$curso = $input['curso_show'];
		$resultado='';
		
		$apikey='AIzaSyCtK_3Qs1e6hyq-l3PedrnrEDPcPpHmQF4';
		$videoID=$url;
	   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$videoID&key=$apikey");
	   $duration = json_decode($dur, true);
		 foreach ($duration['items'] as $vidTime) 
		 { 
			 $vTime= $vidTime['contentDetails']['duration'];
		
		 }
		 $this->duracion=substr($vTime,  2 );
		 //echo $vTime;
		 //echo '<br/>';
		//echo $resultado;
		//echo '<br/>';
		//$horas='00';
		//$minutos='00';
		//$segundos='00';

			 $horas=$this->tiempo('H');
			 $minutos=$this->tiempo('M');
			 $segundos= $this->tiempo('S');

		//echo 'imprimo horas ->'.$horas ;
		//echo '<br/>';
		//echo 'imprimo minutos ->'.$minutos ;
		//echo '<br/>';
		//echo 'imprimo segundos ->'.$segundos ;
		 $resultado=$horas.':'.$minutos.':'.$segundos;
		


		

	$query=DB::update("update  clases set nombre='$nombre',url='$url',duracion='$resultado',id_curso=$curso where id_clase=?",[$id]);
	
	return redirect()->action('ClasesController@clases_mostrar')->withInput();

	}
}
