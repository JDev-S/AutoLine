<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail; //Importante incluir la clase Mail, que será la encargada del envío

class EmailController extends Controller
{
  
    public function contact(Request $request){
        /*MENSAJE PARA NOSOTROS*/
        $subject = $request['descripcion'];
        $for = "juanjesuspadrondiaz@gmail.com";
        Mail::send('/principal/correo_contacto',$request->all(), function($msj) use($subject,$for){
            $msj->from("juanjesuspadrondiaz@gmail.com");
            $msj->subject($subject);
            $msj->to($for);
        });
        
        /*MENSAJE PARA ELLOS
        $subject = $request['categoria'];
        $for = $request['email'];
        Mail::send('/principal/email_recibido',$request->all(), function($msj) use($subject,$for){
            $msj->from("info@jdevs.com.mx","JDev-S");
            $msj->subject($subject);
            $msj->to($for);
        });*/
        return redirect()->back();
    }
    
    
        public function cotizar(Request $request){
        /*MENSAJE PARA NOSOTROS*/
        $subject = 'Cotizacion';
        $for = "juanjesuspadrondiaz@gmail.com";
        Mail::send('/principal/correo_cotizar',$request->all(), function($msj) use($subject,$for){
            $msj->from("juanjesuspadrondiaz@gmail.com");
            $msj->subject($subject);
            $msj->to($for);
        });
            
        $id_auto=$request['id_auto'];
        $correo=$request['correo'];
        $telefono=$request['telefono'];
        $nombre=$request['nombre'];
        $precio=$request['precio'];
            
        $query=DB::insert('insert into contacto (id_contacto,id_auto,correo,telefono,nombre,precio) values ( ?, ?, ?, ?, ?, ?)', [null, $id_auto,$correo,$telefono,$nombre,$precio]);
        
        /*MENSAJE PARA ELLOS
        $subject = $request['categoria'];
        $for = $request['email'];
        Mail::send('/principal/email_recibido',$request->all(), function($msj) use($subject,$for){
            $msj->from("info@jdevs.com.mx","JDev-S");
            $msj->subject($subject);
            $msj->to($for);
        });*/
        $url="http://crautos.mx/";
        return redirect()->to($url);
            
    }
}
 