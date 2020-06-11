@extends('welcome')

@section('contenido')


<section class="contact-2 page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 justify-content-center">
         <div class="section-title">
           <span>Encantados de escucharte.</span>
           <h2>Pongámonos en contacto!</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
     <div class="col-lg-8 col-sm-12 mb-lg-0 mb-1">
        <div class="gray-form row">
         <div class="col-md-12">
          <div id="formmessage">Success/Error Message Goes Here</div>
               <?php
                    $query2 = "select concat(auto.marca,' ',auto.modelo,' ( $',auto.precio,')' )as nombre,auto.id_auto from auto ";
                    $data2=DB::select($query2);
             ?>
             
           <form class="form-horizontal" role="form" method="POST" action={{route('cotizacion')}}>
            {{ csrf_field() }}
            
            <div >
               <div class="form-group">
                   <label>Nombre(s)*</label>
                 <input id="nombre" type="text" class="form-control"  name="nombre" required>
             </div> 
                <div class="form-group">
                   <label>Primer apellido*</label>
                 <input id="paterno" type="text" class="form-control"  name="paterno" required>
             </div> 
                <div class="form-group">
                   <label>Segundo apellido*</label>
                 <input id="materno" type="text" class="form-control"  name="materno" required>
             </div> 
               <div class="form-group">
                   <label>Correo*</label>
                 <input type="email" id="correo" class="form-control" name="correo" required>
                </div>
                <div class="form-group">
                    <label>Teléfono*</label>
                  <input type="text" id="telefono"  class="form-control" name="telefono" required>
                </div>
                        
                 <div class="form-group">
                    <label>Elige un auto*</label>
                             <select class="form-control" name="id_auto" required  id="id_auto" >
           <option value="" disabled selected>Elige un auto</option>
           @foreach ($data2 as $item)
           <option value="{{ $item->id_auto }}" > {{ $item->nombre }} </option>
           @endforeach    </select>
                </div>
                
                
                <button id="submit" name="submit" type="submit" value="Send" class="button red">Realizar cotización!! </button> 
               </div>
            </form>
            <div id="ajaxloader" style="display:none"><img class="center-block" src="/images/ajax-loader.gif" alt=""></div> 
          </div>
        </div>
       </div>
       <div class="col-lg-4 col-sm-12">
          <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-map-marker"></i>
             </div>
             <div class="content">
               <h5>Dirección </h5>
                <p>Blvd Faja de Oro #1217 Salamanca (México)</p>
              </div>
            </div>
            <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-phone"></i>
             </div>
             <div class="content">
               <h5>Teléfono </h5>
                <p>4641001410</p>
              </div>
            </div>
            <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-envelope-o"></i>
             </div>
             <div class="content">
               <h5>Correo  </h5>
                <p>autolinegto@hotmail.com </p>
              </div>
            </div>
         </div>
     </div>
  </div>
</section>

<!--=================================
 contact -->

<!--=================================
 contact-map -->

 <section class="contact-map">
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.017231421863!2d-79.43780268425046!3d36.09306798010035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88532bae09664ccb%3A0xaa6b8f98d3fb8135!2s220+E+Front+St%2C+Burlington%2C+NC+27215%2C+USA!5e0!3m2!1sen!2sin!4v1475045272926" allowfullscreen></iframe>
  </div>
 </section>
@stop
