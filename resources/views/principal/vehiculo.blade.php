@extends('welcome')

@section('contenido')
@section('styles')
<style>
/*Switch Styles*/
.noneDysplay{
    display: none;
}    
    
.toggle{
  position: relative;
  display: block;
  cursor: pointer;
  -webkit-tap-highlight-color: transparent;
  transform: translate3d(0,0,0);
}
.toggle:before{
    content: "";
    position: relative;
    top: 3px;
    left: 3px;
    width: 44px;
    height: 21px;
    display: block;
    background: #dbdbdb;
    border-radius: 15px;
    transition: background .2s ease;
}
.toggle span{
    position: absolute;
    top: 0;
    left: 0;
    width: 26px;
    height: 26px;
    display: block;
    background: white;
    border-radius: 20px;
    box-shadow: 0 3px 8px #dbdbdb;
    transition: all .2s ease;
}
.toggle span:before{
      content: "";
      position: absolute;
      display: block;
      margin: -18px;
      width: 56px;
      height: 56px;
      background: #0072CE;
      border-radius: 50%;
      transform: scale(0);
      opacity: 1;
      pointer-events: none;
}
#ingresos:checked + .toggle:before{
    background: #0072CE;
}
#ingresos:checked + .toggle span{
    background: #ffffff;
    transform: translateX(25px);
    transition: all 0.4s cubic-bezier(.8,.4,.3,1.25), background .15s ease;
    box-shadow: 0 3px 8px rgba(0,0,0,0.3);
}
#historial:checked + .toggle:before{
    background: #0072CE;
}
#historial:checked + .toggle span{
    background: #ffffff;
    transform: translateX(25px);
    transition: all 0.4s cubic-bezier(.8,.4,.3,1.25), background .15s ease;
    box-shadow: 0 3px 8px rgba(0,0,0,0.3);
}

/*Switch Styles*/
</style>
@stop


<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="car-dealer-05" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
<ul>  <!-- SLIDE  -->
    <li data-index="rs-3" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb=""  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
        <img src='{{$oAutos->foto}}'  alt="imagen_auto"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

  </li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
</div>

<section class="car-details page-section-ptb">

  <div class="container">
    <div class="row">
     <div class="col-md-9">
       <h3>{{$oAutos->nombre}}</h3>
      </div>
     <div class="col-md-3">
      <div class="car-price text-lg-right">
         <strong>{{$oAutos->precio}}</strong>
       </div> 
      </div> 
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="details-nav">
            <ul>
              
              <li><a href="javascript:window.print()"><i class="fa fa-print"></i>Imprime esta página</a></li>
            </ul>
         </div>
      </div>
    </div>
    <div class="row">
     <div class="col-md-8">
        <div class="slider-slick">
          <div class="slider slider-for detail-big-car-gallery">
              @foreach($oAutos->fotos as $auto)
                <img class="img-fluid" src='{{$auto->foto}}' alt="imagen_auto">
                
               @endforeach
            </div>
            <div class="slider slider-nav"> 
              @foreach($oAutos->fotos as $auto)
                <img class="img-fluid" src='{{$auto->foto}}' alt="imagen_auto">
                
               @endforeach
            </div>
         </div>
        <div id="tabs">
          

         <div id="tab2" class="tabcontent"> 
            <h6>ESPECIFICACIONES</h6>   
              <table class="table table-bordered">
                 
                <tbody>
                    @foreach($oAutos->especificaciones as $auto)
                  <tr>
                    <th scope="row"> {{$auto->especificacion}}</th>
                    <td>{{$auto->descripcion}}</td>
                  </tr>
                    @endforeach
                 
                  
                  
                </tbody>
              </table>
         </div>
      </div>

  <div class="feature-car">
   <h6>Vehiculos recientes</h6>
    <div class="row">
     <div class="col-md-12">
         <?php 
      
      if ($numero >=3) {
     echo'<div class="owl-carousel" data-nav-arrow="true" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-space="15">';
}  else {
     echo'<div class="owl-carousel" data-nav-arrow="true" data-nav-dots="true" data-items="'.$numero.'" data-md-items="'.$numero.'" data-sm-items="2" data-space="15">';
}
 ?>
          @foreach($aAutos2 as $auto)
        <div class="item">
         <div class="car-item gray-bg text-center">
           <div class="car-image">
             <img class="img-fluid" src='{{$auto->foto}}' alt="">
             <div class="car-overlay-banner">

             </div>
           </div>
           <div class="car-list">
             <ul class="list-inline">
               <li><i class="fa fa-registered"></i>{{$auto->anio}}</li>
               <li><i class="fa fa-cog"></i>{{$auto->transmision}}</li>
               <li><i class="fa fa-dashboard"></i>{{$auto->kilometraje}}</li>
             </ul>
          </div>
           <div class="car-content">
             <a href='/vehiculo/{{$auto->id_auto}}'>{{$auto->nombre}}</a>
             <div class="separator"></div>
             <div class="price">
               
               <span class="new-price">{{$auto->precio}} </span>
             </div>
           </div>
         </div>
       </div>
        @endforeach
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="col-md-4">
       <div class="car-details-sidebar">
          <div class="details-social details-weight">
            <h5>Compartir ahora</h5>
            <ul>
              <li><a href="https://www.facebook.com/autolinesalamanca/"> <i class="fa fa-facebook"></i> facebook</a></li>
              <li><a href="https://www.instagram.com/autolinegto/?hl=es-la"> <i class="fa fa-instagram"></i> Instagram</a></li>
              <li><a href="#"> <i class="fa fa-pinterest-p"></i> pinterest</a></li>
              <li><a href="#"> <i class="fa fa-dribbble"></i> dribbble</a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i> google plus </a></li>
              <li><a href="#"> <i class="fa fa-behance"></i> behance</a></li>
            </ul>
            </div>
            <div class="details-form contact-2 details-weight">
               <form class="gray-form" method="POST" action={{route('cotizar')}}>
            {{ csrf_field() }}
                <h5>Realizar cotización</h5>
                <div class="form-group">
                    <input id="id_auto" name="id_auto" type="hidden" value='{{$oAutos->id_auto}}'>
                    <input id="auto" name="auto" type="hidden" value='{{$oAutos->nombre}}'>     
                </div>
                   
                   <div class="form-group">
                   <label>Nombre*</label>
                   <input type="text" class="form-control" placeholder="Nombre completo"  id="nombre" name="nombre" data-constraints="@Required">
                </div>
                   
                   
                 <div class="form-group">
                    <label>Correo*</label>
                    <input type="email" class="form-control" placeholder="ejemplo@gmail.com" id="correo" name="correo" data-constraints="@Required">
                </div>
                 <div class="form-group">
                    <label>Teléfono*</label>
                    <input type="text" class="form-control" placeholder="Teléfono" id="telefono" name="telefono" data-constraints="@Required">
                </div>
                <div class="form-group">
                    <label>Costo del auto*</label>
                   
                    <input type="text" class="form-control"  value='{{$oAutos->precio}}' disabled id="precio" name="precio" data-constraints="@Required">
                   
                </div>
           <!-- <div class="options">
			<p>Comprobar ingresos</p>
			<div class="center">
				<input type="checkbox" id="ingresos" class="noneDysplay" value="1"/>
				<label for="ingresos" class="toggle"><span></span></label>    
			</div>
		</div>	
                   
            <div class="options">
			<p>Tiene historial</p>
			<div class="center">
				<input type="checkbox" id="historial" class="noneDysplay" value="2"/>
				<label for="historial" class="toggle"><span></span></label>    
			</div>
		   </div>-->
                 <div class="form-group">
                     <button type="submit"  class="button red">
   Realizar cotización
 </button>
                  <!--<a class="button red" href="#">Realizar cotización.</a>-->
                </div>
              </form>
                <a href"/"> Requisitos para el financiamiento</a>
               <!-- <h4>Financiación</h4>
<p>Cálculo de mensualidades:</p>
<p id="mensualidad12"></p>
<p id="mensualidad24"></p>
<p id="mensualidad36"></p>
<p id="mensualidad48"></p>-->

            </div> 
          </div>
        </div>
       </div>
     </div>
</section>

<!--=================================
car-details -->
 
 
<!--=================================
 footer -->
@stop