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
                        echo'<link rel="next" href="/vehiculos2/'.($pagina+1).'">';
                    }
                    else
                    {
                        echo '<meta name="robots" content="noindex, follow" />';
                        if($pagina>$paginacion)
                       {
                         
                           echo'<link rel="prev" href="/vehiculos2/'.$paginacion.'">';
                       }
                       else
                       {
                           
                           echo'<link rel="prev" href="/vehiculos2/'.($pagina-1).'">';
                       }
                    }
                     if($pagina<$paginacion && $pagina!=1)
                   {
                       
                       echo'<link rel="next" href="/vehiculos2/'.($pagina+1).'">';
                   }
?>
@stop
@section('contenido')

<section class="product-listing page-section-ptb">
 <div class="container">
  <div class="row">
   <div class="col-lg-1 col-md-1">

     </div>
     <div class="col-lg-9 col-md-8">
       <div class="sorting-options-main"> 
        <div class="row">

        

        </div> 
        <div class="row sorting-options">
          <div class="col-lg-5">
           <div class="change-view-button">
             <a class="active" href="/vehiculos2"> <i class="fa fa-th"></i> </a>
             <a href="/vehiculos"> <i class="fa fa-list-ul"></i> </a>
           </div>
          </div> 

        </div>
       </div>
        <div class="row">
        @foreach($aAutos as $auto)
          <div class="col-lg-4">
            <div class="car-item gray-bg text-center">
             <div class="car-image">
               <img class="img-fluid" src='{{$auto->foto}}' alt="">
               <div class="car-overlay-banner">

               </div>
             </div>
             <div class="car-list">
               <ul class="list-inline">
                 <li><i class="fa fa-registered"></i>{{$auto->anio}}</li>
                 <li><i class="fa fa-cog"></i> {{$auto->transmision}} </li>
                 <li><i class="fa fa-shopping-cart"></i>{{$auto->kilometraje}}</li>
               </ul>
            </div>
             <div class="car-content">
               <a href="/vehiculo/{{$auto->id_auto}}">{{$auto->nombre}}</a>
               <div class="separator"></div>
               <div class="price">
                 <span class="new-price">${{$auto->precio}} </span>
               </div>
             </div>
           </div>
           </div>
            @endforeach
          </div>
           <div class="pagination-nav d-flex justify-content-center">
               <ul class="pagination">
                   <?php
                   $paginacion= $numero_autos[0]->numero_autos/7;
                   $paginacion=ceil($paginacion); 
                   
                   if($pagina>1)
                   {
                       if($pagina>$paginacion)
                       {
                           echo'<li><a href="/vehiculos2/'.$paginacion.'">«</a></li>';
                       }
                       else
                       {
                           echo'<li><a href="/vehiculos2/'.($pagina-1).'">«</a></li>';
                       }
                       
                   }                
                

               
                   

                   for($i=1;$i<=ceil($numero_autos[0]->numero_autos/7);$i++)
                   {
                       if($i==$pagina)
                       {
                           echo'<li class="active"><a  href="/vehiculos2/'.$i.'">'.$i.'</a></li>';
                           
                       }
                       else
                       {
                           echo'<li><a  href="/vehiculos2/'.$i.'">'.$i.'</a></li>';
                       }
                     
                   }
                    
                   if($pagina<$paginacion)
                   {
                       echo'<li><a href="/vehiculos2/'.($pagina+1).'">»</a></li>';
                   }
                  
                   ?>
             </ul>
          </div>
       </div>
     </div>
  </div>
</section>
@stop