@extends('welcome')
@section('gifs')
<div id="loading">
  <div id="loading-center">
      <img src="/images/loader.gif" alt="img_gif">
 </div>
</div>
@stop
@section('head')
<?php
 $paginacion= $numero_autos[0]->numero_autos/7;
                   $paginacion=ceil($paginacion); 
                    if($pagina==1)
                    {
                       echo '<meta name="robots" content="index, follow" />';
                        echo'<link rel="next" href="/vehiculos/'.($pagina+1).'">';
                    }
                    else
                    {
                        echo '<meta name="robots" content="noindex, follow" />';
                        if($pagina>$paginacion)
                       {
                         
                           echo'<link rel="prev" href="/vehiculos/'.$paginacion.'">';
                       }
                       else
                       {
                           
                           echo'<link rel="prev" href="/vehiculos/'.($pagina-1).'">';
                       }
                    }
                     if($pagina<$paginacion && $pagina!=1)
                   {
                       
                       echo'<link rel="next" href="/vehiculos/'.($pagina+1).'">';
                   }
?>
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
       <div class="sorting-options-main" style="width:600px;" >
        <div class="row">
        
        </div> 
        <div class="row sorting-options"  >
          <div class="col-md-10" >
           <div class="change-view-button" >
               
             <a href="/vehiculos2"> <i class="fa fa-th" ></i> </a>
              
             <a class="active" href="/vehiculos" > <i class="fa fa-list-ul"  ></i> </a>
              
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
                 </div>
               </div>
              </div>
             </div>
              <div class="col-lg-8 col-md-12">
                <div class="car-details">
                <div class="car-title">
                 <a href='/vehiculo/{{$auto->id_auto}}'>{{$auto->nombre}}</a>
                  </div>
                  <div class="price">
                       <span class="new-price">{{$auto->precio}} </span>
                       <a class="button red float-right" href='/vehiculo/{{$auto->id_auto}}'>Detalle</a>
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
            
           <div class="pagination-nav d-flex justify-content-center">
               <ul class="pagination">
                   <?php
                   $paginacion= $numero_autos[0]->numero_autos/7;
                   $paginacion=ceil($paginacion); 
                   
                   if($pagina>1)
                   {
                       if($pagina>$paginacion)
                       {
                           echo'<li><a href="/vehiculos/'.$paginacion.'">«</a></li>';
                       }
                       else
                       {
                           echo'<li><a href="/vehiculos/'.($pagina-1).'">«</a></li>';
                       }
                       
                   }                
                

               
                   

                   for($i=1;$i<=ceil($numero_autos[0]->numero_autos/7);$i++)
                   {
                       if($i==$pagina)
                       {
                           echo'<li class="active"><a  href="/vehiculos/'.$i.'">'.$i.'</a></li>';
                           
                       }
                       else
                       {
                           echo'<li><a  href="/vehiculos/'.$i.'">'.$i.'</a></li>';
                       }
                     
                   }
                    
                   if($pagina<$paginacion)
                   {
                       echo'<li><a href="/vehiculos/'.($pagina+1).'">»</a></li>';
                   }
                  
                   ?>
             </ul>
          </div>
          </div>
        </div>
      </div>
</section>
@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script type="text/javascript">

function imprimirValor(){
    alert("A");
  var select = document.getElementById("provincia");
    alert("B");
  var options=document.getElementsByTagName("option");
    alert("C");
  console.log(select.value);
    alert(select.value);
  console.log(options[select.value-1].innerHTML)
    alert("Final");
}
</script>
@stop

@stop