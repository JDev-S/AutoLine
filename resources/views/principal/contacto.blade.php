@extends('welcome')           
@section('contenido')


<section class="contact-2 page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 justify-content-center">
         <div class="section-title">
           <span>Encantados en escucharte.</span>
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
           <form class="form-horizontal" id="contactform" role="form" method="post" action="php/contact-form.php">
            
            <p>¡Sería genial saber de ti! Si tiene alguna pregunta, no dude en enviarnos un mensaje. ¡Esperamos tener noticias suyas! Respondemos en 24 horas. !</p>
            <div class="contact-form">
               <div class="form-group">
                 <input id="name" type="text" placeholder="Nombre completo*" class="form-control"  name="name">
             </div> 
               <div class="form-group">
                 <input type="email" placeholder="Correo*" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <input type="text" placeholder="Teléfono*" class="form-control" name="phone">
              </div>
                 <div class="form-group">
                   <textarea class="form-control input-message" placeholder="Comentario*" rows="7" name="message"></textarea>
              </div>
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button red"> Enviar!! </button>
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
                <p>220E Front St. Burlington NC 215 </p>
              </div>
            </div>
            <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-phone"></i>
             </div>
             <div class="content">
               <h5>Teléfono </h5>
                <p>(007) 123 456 7890 </p>
              </div>
            </div>
            <div class="feature-box-3">
            <div class="icon">
               <i class="fa fa-envelope-o"></i>
             </div>
             <div class="content">
               <h5>Correo  </h5>
                <p> support@website.com </p>
              </div>
            </div>
            <div class="opening-hours gray-bg">
                <h6>Horarios</h6>
                <ul class="list-style-none">
                  <li><strong>Domingo</strong> <span class="text-red"> closed</span></li>
                  <li><strong>Lunes</strong> <span> 9:00 AM to 9:00 PM</span></li>
                  <li><strong>Martes </strong> <span> 9:00 AM to 9:00 PM</span></li>
                  <li><strong>Miércoles </strong> <span> 9:00 AM to 9:00 PM</span></li>
                  <li><strong>Jueves </strong> <span> 9:00 AM to 9:00 PM</span></li>
                  <li><strong>Viernes </strong> <span> 9:00 AM to 9:00 PM</span></li>
                  <li><strong>Sábado </strong> <span> 9:00 AM to 9:00 PM</span></li>
                </ul>
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

<!--=================================
 contact-map -->
 

<!--=================================
 footer -->


@stop