<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutoController extends Controller
{
     public function mostrar_autos_index()
	{
        $aAutos = array();
        $aAutos_final=array();

		$autos=DB::select("SELECT * from ((select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion WHERE auto.id_auto in ( SELECT auto.id_auto FROM ( SELECT auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto FROM auto) as t where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') order by auto.id_auto)

        UNION

        (select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto left join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where auto.id_auto not in(select descripcion_especificcacion.id_auto from descripcion_especificcacion inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') GROUP by id_auto)) as t where id_auto in (SELECT id_auto from (select * from auto limit 6) as t) order by id_auto");
        
          $oAutos = new \stdClass();
          $auxId_auto = -1;
        
          $oAutos->anio = '';
          $oAutos->transmision = '';
          $oAutos->kilometraje = '';
          $oAutos->caballos_de_fuerza = '';
        
          foreach($autos as $auto)
          {
               if($auto->id_auto!==$auxId_auto && $auxId_auto!==-1)
              {
                  array_push($aAutos,$oAutos);
                  $oAutos = new \stdClass();

                  $oAutos->anio = '';
                  $oAutos->transmision = '';
                  $oAutos->kilometraje = '';
                  $oAutos->caballos_de_fuerza = '';
              }
              
              $auxId_auto = $auto->id_auto;
              $oAutos->nombre = $auto->marca.' '.$auto->modelo;
              $oAutos->precio = $auto->precio;
              $oAutos->foto = $auto->foto;
              
             
              if($auto->especificacion=='Año')
              {
                   $oAutos->anio = $auto->descripcion;
              }
              else
              {
                  if($auto->especificacion=='Transmision')
                  {
                      $oAutos->transmision = $auto->descripcion;
                  }
                  else
                  {
                       if($auto->especificacion=='Kilometraje')
                       {
                            $oAutos->kilometraje = $auto->descripcion;
                       }
                      else
                      {
                         if($auto->especificacion=='Caballos de fuerza')
                         {
                                $oAutos->caballos_de_fuerza = $auto->descripcion;
                         } 
                      }
                  }
              }
              if($auto === end($autos))
              {
                    array_push($aAutos,$oAutos);
              }
          }
          
         
         
          
         // print_r($aAutos_final);
        //  die();
          
          
		return view('/principal/index',compact('aAutos'));
    }
    
    
    
    public function mostrar_autos($pagina=1)
    {
        if($pagina<=0)
        {
            $pagina=1;
        }
        $aAutos = array();
        $aAutos_final=array();
        $numero_autos=DB::select('select count(*)as numero_autos from auto');
        
        $valor=($pagina*7)-7;
         
		$autos=DB::select("SELECT * from ((select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion WHERE auto.id_auto in ( SELECT auto.id_auto FROM ( SELECT auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto FROM auto) as t where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') order by auto.id_auto)

        UNION

        (select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto left join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where auto.id_auto not in(select descripcion_especificcacion.id_auto from descripcion_especificcacion inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') GROUP by id_auto)) as t where id_auto in (SELECT id_auto from (select * from auto limit $valor,7) as t) order by id_auto");
        
          $oAutos = new \stdClass();
          $auxId_auto = -1;
        
          $oAutos->anio = '';
          $oAutos->transmision = '';
          $oAutos->kilometraje = '';
          $oAutos->caballos_de_fuerza = '';
        
          foreach($autos as $auto)
          {
               if($auto->id_auto!==$auxId_auto && $auxId_auto!==-1)
              {
                  array_push($aAutos,$oAutos);
                  $oAutos = new \stdClass();

                  $oAutos->anio = '';
                  $oAutos->transmision = '';
                  $oAutos->kilometraje = '';
                  $oAutos->caballos_de_fuerza = '';
              }
              
              $auxId_auto = $auto->id_auto;
              $oAutos->nombre = $auto->marca.' '.$auto->modelo;
              $oAutos->precio = $auto->precio;
              $oAutos->foto = $auto->foto;
              
             
              if($auto->especificacion=='Año')
              {
                   $oAutos->anio = $auto->descripcion;
              }
              else
              {
                  if($auto->especificacion=='Transmision')
                  {
                      $oAutos->transmision = $auto->descripcion;
                  }
                  else
                  {
                       if($auto->especificacion=='Kilometraje')
                       {
                            $oAutos->kilometraje = $auto->descripcion;
                       }
                      else
                      {
                         if($auto->especificacion=='Caballos de fuerza')
                         {
                                $oAutos->caballos_de_fuerza = $auto->descripcion;
                         } 
                      }
                  }
              }
              if($auto === end($autos))
              {
                    array_push($aAutos,$oAutos);
              }
          }
        
          
		return view('/principal/vehiculos',compact('aAutos','numero_autos','pagina'));
    }
    
    
    
    
    
        public function mostrar_autos2()
    {
        $aAutos = array();
        $aAutos_final=array();

		$autos=DB::select("SELECT * from ((select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion WHERE auto.id_auto in ( SELECT auto.id_auto FROM ( SELECT auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto FROM auto) as t where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') order by auto.id_auto)

        UNION

        (select auto.id_auto,auto.marca,auto.modelo,auto.precio,auto.foto,descripcion_especificcacion.descripcion,especificacion.especificacion from auto left join descripcion_especificcacion on auto.id_auto=descripcion_especificcacion.id_auto left join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where auto.id_auto not in(select descripcion_especificcacion.id_auto from descripcion_especificcacion inner join especificacion on especificacion.id_especificacion=descripcion_especificcacion.id_especificacion where especificacion.especificacion='Año' or especificacion.especificacion='Transmision' or especificacion.especificacion='Kilometraje' or especificacion.especificacion='Caballos de fuerza') GROUP by id_auto)) as t order by id_auto");
        
          $oAutos = new \stdClass();
          $auxId_auto = -1;
        
          $oAutos->anio = '';
          $oAutos->transmision = '';
          $oAutos->kilometraje = '';
          $oAutos->caballos_de_fuerza = '';
        
          foreach($autos as $auto)
          {
               if($auto->id_auto!==$auxId_auto && $auxId_auto!==-1)
              {
                  array_push($aAutos,$oAutos);
                  $oAutos = new \stdClass();

                  $oAutos->anio = '';
                  $oAutos->transmision = '';
                  $oAutos->kilometraje = '';
                  $oAutos->caballos_de_fuerza = '';
              }
              
              $auxId_auto = $auto->id_auto;
              $oAutos->nombre = $auto->marca.' '.$auto->modelo;
              $oAutos->precio = $auto->precio;
              $oAutos->foto = $auto->foto;
              
             
              if($auto->especificacion=='Año')
              {
                   $oAutos->anio = $auto->descripcion;
              }
              else
              {
                  if($auto->especificacion=='Transmision')
                  {
                      $oAutos->transmision = $auto->descripcion;
                  }
                  else
                  {
                       if($auto->especificacion=='Kilometraje')
                       {
                            $oAutos->kilometraje = $auto->descripcion;
                       }
                      else
                      {
                         if($auto->especificacion=='Caballos de fuerza')
                         {
                                $oAutos->caballos_de_fuerza = $auto->descripcion;
                         } 
                      }
                  }
              }
              if($auto === end($autos))
              {
                    array_push($aAutos,$oAutos);
              }
          }
          
		return view('/principal/vehiculos2',compact('aAutos'));
    }
    
    
    
    
    
    public function mostrar_unico_carro()
    {

        $aAutos = array();
        $oAutos = new \stdClass();
         
        $aDescripcion_auto = array();
        $oDescripcion_auto = new \stdClass();
         
        $aFotos_auto = array();
        $oFotos_auto = new \stdClass();
         
         
        $autos=DB::select("select * from auto where id_auto=1");
        $descripcion_auto=DB::select("select descripcion_especificcacion.id_especificacion,descripcion,especificacion from descripcion_especificcacion inner join especificacion on descripcion_especificcacion.id_especificacion=especificacion.id_especificacion WHERE id_auto=1");
        $fotos_auto=DB::select("select * from fotos_auto where id_auto=1");
         
        $oAutos->id_auto = $autos[0]->id_auto;
        $oAutos->marca = $autos[0]->marca;
        $oAutos->modelo = $autos[0]->modelo;
        $oAutos->precio = $autos[0]->precio;
        $oAutos->foto = $autos[0]->foto;
         
        $oAutos->especificaciones = $descripcion_auto;
        $oAutos->fotos = $fotos_auto;
          
        print_r($oAutos);
        die();
          
          
		return view('/principal/vehiculo',compact('aAutos'));
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
         if($input->hasFile('foto_show'))
         {
             $file=$input->file('foto_show');
             $name=time().$marca."_".$modelo;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
              $query=DB::insert('insert into auto (id_auto,marca,modelo,precio,foto) values ( ?, ?, ?, ?, ?)', [null, $marca,$modelo,$precio,$foto]);
        return redirect()->action('AutoController@autos_mostrar')->withInput();
	
         }

       
	}

	public function clases_editar()
    {
			return view('/Administrador/Auto/edit');
    }

	public function actualizar(Request $input)
	{	    
		    $id=$input['id_show'];
            $marca = $input['marca_show'];
            $modelo = $input['modelo_show'];
            $precio = $input['precio_show'];
            $foto= $input['foto_show'];

        $query=DB::update("update auto set marca='$marca',modelo='$modelo',precio='$precio',foto='$foto' where id_auto=?",[$id]);
        return redirect()->action('AutoController@autos_mostrar')->withInput();

	}
}
