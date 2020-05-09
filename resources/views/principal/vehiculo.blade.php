@extends('welcome')
@section('gifs')
<div id="loading">
  <div id="loading-center">
      <img src="/images/loader2.gif" alt="img_gif">
 </div>
</div>
@stop
@section('contenido')

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
              <ul> 
                <li><a href="#"><i class="fa fa-link"></i></a></li>
                <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
               </ul>
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
               
               <span class="new-price">${{$auto->precio}} </span>
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
               <form class="gray-form">
                <h5>Realizar cotización</h5>
                <div class="form-group">
                   <label>Nombre*</label>
                   <input type="text" class="form-control" placeholder="Nombre completo">
                </div>
                 <div class="form-group">
                    <label>Correo*</label>
                    <input type="text" class="form-control" placeholder="ejemplo@gmail.com">
                </div>
                 <div class="form-group">
                    <label>Teléfono*</label>
                    <input type="text" class="form-control" placeholder="Teléfono">
                </div>
                <div class="form-group">
                    <label>Costo del auto*</label>
                    <input type="text" class="form-control" placeholder="$000,000,000">
                </div>
                <div class="form-group">
                    <label>Enganche*</label>
                    <input type="text" class="form-control" placeholder="$000,000,000">
                </div>
                <div class="form-group">
                    <label>Comprobar Ingresos*</label>
                    <input type="checkbox" class="noneDysplay" id="ingresos">
                </div>
                <div class="form-group">
                    <label>Tiene historial*</label>
                    <input type="checkbox" class="noneDysplay" id="ingresos">
                </div>
                   <p>
                   Si el cliente no tiene historial crediticio ni comprobante de ingresos, se solicitará un enganche de mínimo el 35%
                   </p>
                 <div class="form-group">
                  <a class="button red" href="#">Realizar cotización.</a>
                </div>
              </form>
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