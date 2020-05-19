@extends('welcome')   
@section('gifs')
<div id="loading">
  <div id="loading-center">
      <img src="/images/loader3.gif" alt="img_gif">
 </div>
</div>
@stop
@section('contenido')

<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="car-dealer-05" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
<ul>  <!-- SLIDE  -->
    <li data-index="rs-3" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="/images/100x50_3ecde-01.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
        <img src="/images/3ecde-01.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 1 -->
    <div class="tp-caption   tp-resizeme" 
       id="slide-3-layer-1" 
       data-x="62" 
       data-y="179" 
            data-width="['auto']"
      data-height="['auto']"
 
            data-type="text" 
      data-responsive_offset="on" 

            data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
            data-textAlign="['left','left','left','left']"
            data-paddingtop="[0,0,0,0]"
            data-paddingright="[0,0,0,0]"
            data-paddingbottom="[0,0,0,0]"
            data-paddingleft="[0,0,0,0]"

            style="z-index: 5; white-space: nowrap; font-size: 70px; line-height: 80px; font-weight: 900; color: rgba(255, 255, 255, 1.00);font-family:Roboto;text-transform:uppercase;">Encuentra el auto  <br>de tus sueños!! </div>

    <!-- LAYER NR. 2 -->


  </li>
  <!-- SLIDE  -->
    <li data-index="rs-4" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="/images/100x50_ac5dd-02.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
        <img src="/images/ac5dd-02.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->

    <!-- LAYER NR. 4 -->


    <!-- LAYER NR. 5 -->

    <!-- LAYER NR. 6 -->

  </li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
</div>

   


<section class="feature-car gray-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
        
         <h2>Últimos carros añadidos</h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
 <div class="row">
  <div class="col-md-12">
      <?php 
      
      if ($numero >=3) {
     echo'   <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="15">';
}  else {
     echo'   <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="'.$numero.'" data-md-items="'.$numero.'" data-sm-items="2" data-xs-items="1" data-space="15">';
}
 ?>


@foreach($aAutos as $auto)
 <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src='{{$auto->foto}}' alt="imagen_auto" width="450px;" height="321px;">
           <div class="car-overlay-banner">
           </div>
         </div>
         <div class="car-content">
          <a href='/vehiculo/{{$auto->id_auto}}'>{{$auto->nombre}}</a>
          <div class="car-list">
           <ul class="list-inline">
             <li>{{$auto->anio}}</li>
             <li>{{$auto->transmision}}</li>
             <li>{{$auto->caballos_de_fuerza}}</li>
             <li>{{$auto->kilometraje}}</li>
           </ul>
           </div>
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
</section>   


<section class="welcome-3 white-bg page-section-ptb">
  <div class="container">
    <div class="row about custom-block-2">
      <div class="col-md-6">
        <h2>Acerca de</h2> 
        <p> Bienvenidos a AutoLine la mejor concesionaria en Salamanca Gto. (México), donde  podras encontrar las mejores marcas del mundo a tu alcance, cotizaciones sin compromiso, precios accesibles ayudandote a que tengas el carro de tus sueños y con un plan de financiamiento  flexible que se adapta a tu estilo de vida</p>
      </div>
      <div class="col-md-6">
        <img class="img-fluid center-block" src="/images/11.png" alt="">
       </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-beetle"></i>
         </div> 
         <div class="content">
          <h5>Las mejores marcas</h5>
          <p>Tenemos para ti las mejores marcas del mundo a tu alcance para que no tengas que salir de tu ciudad.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-pencil"></i>
         </div> 
         <div class="content">
          <h5>Cotizaciones</h5>
          <p>Cotizaciones sin compromiso! Haz uso de nuestra herramienta de cotizacion que tenemos especialmente para ti.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-calculator"></i>
         </div> 
         <div class="content">
          <h5>Precios accesibles</h5>
          <p> Encontrar el auto de tus sueños ahora es posible! Acércate a nosotros, tenemos precios fabulosos.</p>  
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-wallet"></i>
         </div> 
         <div class="content">
          <h5>Servicios financieros</h5>
          <p>Plan de financiamiento flexible que se adapta a tu estilo de vida, para que puedas estrenar el auto de tus sueños.</p>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>

@stop
 <!--=================================
 Newsletter -->
