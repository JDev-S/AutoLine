@extends('welcome')           
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
        
         <h2>Carros  registrados inicialmente</h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
 <div class="row">
  <div class="col-md-12">
   <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="15">

@foreach($autos as $auto)
 <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="/images/01.jpg" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">{{$auto->modelo_marca}}</a>
          <div class="car-list">
           <ul class="list-inline">
             <li>{{$auto->año}}</li>
             <li>{{$auto->transicion}}</li>
             <li>{{$auto->caballo_de_fuerza}}</li>
             <li>{{$auto->kilometraje}}</li>
           </ul>
           </div>
           <div class="info"> 
             <p>You will begin to realize why this exercise Pattern is called the Dickens with to ghost.</p>
           </div>
           <div class="price">
             
             <span class="new-price">$auto->{{precio}} </span>
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
    <div class="row">
      <div class="col-md-4">
        <div class="content-box-2 car-bg-1">
            <i class="glyph-icon flaticon-beetle"></i>
            <a class="title" href="#">Buy a Car</a>
            <p>We sell perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content-box-2 car-bg-2">
            <i class="glyph-icon flaticon-price-tag"></i>
            <a class="title" href="#">Sell My Car</a>
            <p>You can sell sed ut unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content-box-2 car-bg-3">
            <i class="glyph-icon flaticon-reparation"></i>
            <a class="title" href="#">Get Service</a>
            <p>We provide sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
            <a class="link" href="#">read more <i class="fa fa-angle-double-right"></i> </a>
        </div>
      </div>
    </div>
    <div class="row about custom-block-2">
      <div class="col-md-6">
        <h2>About us </h2>
        <span>Everything you need to build an amazing dealership website. </span> 
        <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <b>Amazing dealership website </b> developed especially for car sellers, dealers or auto motor retailers. You can use this template for creating website based on any framework and any language </p>
      </div>
      <div class="col-md-6">
        <img class="img-fluid center-block" src="/images/11.png" alt="">
       </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="feature-box-2 box-hover active">
         <div class="icon">
           <i class="glyph-icon flaticon-beetle"></i>
         </div> 
         <div class="content">
          <h5>All brands</h5>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-interface-1"></i>
         </div> 
         <div class="content">
          <h5>Free Support</h5>
          <p>Omnis sed ut perspiciatis unde iste natus error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-key"></i>
         </div> 
         <div class="content">
          <h5>Dealership</h5>
          <p>Error sed ut perspiciatis unde omnis iste natus sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box-2 box-hover">
         <div class="icon">
           <i class="glyph-icon flaticon-wallet"></i>
         </div> 
         <div class="content">
          <h5>Affordable</h5>
          <p>Perspiciatis sed ut unde omnis iste natus error sit voluptatem acantium doloremque laudantium.</p>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="feature-car gray-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <h2>Ultimos carros añadidos </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
 <div class="row">
  <div class="col-md-12">
   <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="15">
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="/images/01.jpg" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">Acura Rsx</a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>You will begin to realize why this exercise Pattern is called the Dickens with to ghost.</p>
           </div>
           <div class="price">
             <span class="old-price">$29,568</span>
             <span class="new-price">$26,598 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="/images/02.jpg" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">Lexus GS 450h</a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>Dickens with to ghost you will begin to realize why this exercise Pattern is called the.</p>
           </div>
           <div class="price">
             <span class="old-price">$40,968</span>
             <span class="new-price">$36,558 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="/images/03.jpg" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">GTA 5 Lowriders DLC</a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>realize why this dickens with to ghost you will begin to exercise Pattern is called the.</p>
           </div>
           <div class="price">
             <span class="old-price">$35,568</span>
             <span class="new-price">$32,698 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item-2 text-center">
         <div class="car-image">
           <img class="img-fluid" src="/images/05.jpg" alt="">
           <div class="car-overlay-banner">
            <ul> 
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-content">
          <a href="#">Toyota avalon hybrid </a>
          <div class="car-list">
           <ul class="list-inline">
             <li> 2017</li>
             <li>  Manual </li>
             <li>  210 hp </li>
             <li> 6,000 mi</li>
           </ul>
           </div>
           <div class="info"> 
             <p>Dickens with to ghost realize why this you will begin to exercise Pattern is called the.</p>
           </div>
           <div class="price">
             <span class="old-price">$44,768</span>
             <span class="new-price">$33,698 </span>
           </div>
         </div>
       </div>
     </div>
    </div>
   </div>
  </div>
  </div>
</section>   
@stop
 <!--=================================
 Newsletter -->
