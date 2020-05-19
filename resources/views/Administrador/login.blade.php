@extends('welcome')

@section('contenido')
<section class="login-form page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <h2> Consola de administrador AutoLine </h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row justify-content-center">
     <div class="col-lg-6 col-md-12">
     <div class="gray-form clearfix">
           <form method="POST" action={{route('logueo')}}>
            {{ csrf_field() }}
          <div class="form-group">
            
             <label for="name">Nombre de usuario* </label>
               <input id="email" class="form-control" type="email" placeholder="Nombre de usuario" name="email" data-constraints="@Required">
         </div>
         <div class="form-group">
             <label for="Password">Contraseña* </label>
             <input id="pass" class="form-control" type="password" placeholder="Password" name="pass" data-constraints="@Required">
         </div> 
              <button id="submit" name="submit" type="submit" value="Send" class="button red"> Iniciar sesión!! </button>
        </form>
      </div> 
         
         
      </div>
     </div>
   </div>
</section>
@stop

