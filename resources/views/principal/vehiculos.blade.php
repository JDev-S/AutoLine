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



  </li>
  <!-- SLIDE  -->
    <li data-index="rs-4" data-transition="random-static,random-premium,random" data-slotamount="default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default" data-easeout="default,default,default,default" data-masterspeed="default,default,default,default"  data-thumb="/images/100x50_ac5dd-02.jpg"  data-rotate="0,0,0,0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    <!-- MAIN IMAGE -->
        <img src="/images/ac5dd-02.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
    <!-- LAYERS -->
  </li>
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
</div>

<section class="product-listing page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-lg-0 col-md-1">
     </div>
      <div class="col-lg-9 col-md-8">
       <div class="sorting-options-main">
        <div class="row">
         <div class="col-lg-7">
          <div class="price-slide-2">
           <div class="price">
            <label for="amount-2">Rango</label>
              <input type="text" id="amount-2" class="amount" value="$50 - $300" />
             <div id="slider-range-2"></div>
           </div>
          </div>
         </div>
         <div class="col-lg-5" >
           <div class="price-search" >
            <span >Buscar por véhiculo</span>
             <div class="search">
              <i class="fa fa-search"></i>
             <input type="search" class="form-control placeholder" placeholder="Buscar...." >
            </div>
           </div>
         </div>
        </div> 
        <div class="row sorting-options">
          <div class="col-md-5">
           <div class="change-view-button">
             <a href="/vehiculos2"> <i class="fa fa-th"></i> </a>
             <a class="active" href="/vehiculos"> <i class="fa fa-list-ul"></i> </a>
           </div>
          </div> 
         <div class="col-md-3 text-right">
           <div class="selected-box">
            <select>
              <option>Mostrar  </option>
              <option>7</option>
              <option>14 </option>
              <option>21 </option>
              <option>28 </option>
              <option>35 </option>
            </select>
          </div>
         </div>
         <div class="col-md-4 text-right">
            <div class="selected-box">
             <select>
              <option>Ordenar por </option>
              <option>Menor precio</option>
              <option>Mayor precio </option>
              <option>Ordenar por: A - Z </option>
              <option>Ordenar por: Z - A </option>
             </select>
           </div>
        </div>
        </div>
        </div>
          @foreach($aAutos as $auto)
        <div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src='{{$auto->foto}}' alt="">
                 <div class="car-overlay-banner">
                  <ul> 
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">{{$auto->nombre}}</a>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.</p>
                  </div>
                  <div class="price">
                       <span class="new-price">${{$auto->precio}} </span>
                       <a class="button red float-right" href="/vehiculo">Details</a>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> {{$auto->anio}}</li>
                       <li><i class="fa fa-cog"></i>{{$auto->transmision}} </li>
                       <li><i class="fa fa-shopping-cart"></i> {{$auto->kilometraje}}</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>
          @endforeach
            <!--<div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="/images/02.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul> 
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">Lexus GS 450h</a>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.</p>
                  </div>
                  <div class="price">
                       <span class="old-price">$35,568</span>
                       <span class="new-price">$32,698 </span>
                       <a class="button red float-right" href="/vehiculo">Details</a>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> 2016</li>
                       <li><i class="fa fa-cog"></i> Manual </li>
                       <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>-->
             <!--<div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="/images/03.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul> 
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">GTA 5 Lowriders DLC</a>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.</p>
                  </div>
                  <div class="price">
                       <span class="old-price">$35,568</span>
                       <span class="new-price">$32,698 </span>
                       <a class="button red float-right" href="/vehiculo">Details</a>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> 2016</li>
                       <li><i class="fa fa-cog"></i> Manual </li>
                       <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>-->
             <!--<div class="car-grid">
           <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="car-item gray-bg text-center">
               <div class="car-image">
                 <img class="img-fluid" src="/images/04.jpg" alt="">
                 <div class="car-overlay-banner">
                  <ul> 
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                   </ul>
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href="#">Toyota avalon hybrid </a>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam repellendus non voluptate. Harum blanditiis ullam deleniti.</p>
                  </div>
                  <div class="price">
                       <span class="old-price">$35,568</span>
                       <span class="new-price">$32,698 </span>
                       <a class="button red float-right" href="/vehiculo">Details</a>
                     </div>
                   <div class="car-list">
                     <ul class="list-inline">
                       <li><i class="fa fa-registered"></i> 2016</li>
                       <li><i class="fa fa-cog"></i> Manual </li>
                       <li><i class="fa fa-shopping-cart"></i> 6,000 mi</li>
                     </ul>
                   </div>
                  </div>
                </div>
               </div>
             </div>-->
           <div class="pagination-nav d-flex justify-content-center">
               <ul class="pagination">
                <li><a href="#">«</a></li>
                <li class="active"><a href="/vehiculos?pagina=1">1</a></li>
               <?php
                   $paginacion= $numero_autos[0]->numero_autos/7;
                   $paginacion=ceil($paginacion);

                   for($i=2;$i<=ceil($numero_autos[0]->numero_autos/7);$i++)
                   {
                     echo'<li><a  href="/vehiculos/'.$i.'">'.$i.'</a></li>';
                   }
               ?>
             <li><a href="#">»</a></li>
             </ul>
          </div>
          </div>
        </div>
      </div>
</section>
        


@stop