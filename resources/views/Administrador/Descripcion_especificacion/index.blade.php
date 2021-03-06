@extends('welcome2')
@section('contenido')

<div class="container justify-content-center align-items-center">
  <br>
    <h2 style="text-align:center;">Administración de especificaciones  de los autos</h2>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>

  <div class="table-responsive" style=" border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;">
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="margin: 0 auto;">
          <thead>
          <tr>
          <th>Auto</th>
              <th>Especificacion</th>
             
              <th>Descripcion</th>
              <th>Acciones</th>
              
            
          </tr>
          </thead>
          <tbody>
          @foreach($descripcion as $auto)
              <tr>
              <td>{{ $auto->carro}}</td>
                  <td>{{ $auto->especificacion}}</td>
                  
                  <td>{{ $auto->descripcion}}</td>
                  <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $auto->id_auto;?>"  data-id2="<?php echo $auto->id_especificacion;?>" data-carro="<?php echo $auto->carro;?>" data-especificacion="<?php echo $auto->especificacion;?>">Eliminar</button>
                      
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-descripcion="<?php echo $auto->descripcion;?>"   data-id="<?php echo $auto->id_auto;?>" data-id2="<?php echo $auto->id_especificacion;?>">Editar</button>
                  </td>
                 

              </tr>
          @endforeach
          </tbody>
      </table>
      </div>
</div>



<!--model eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="deleteModalLabel">Eliminar Registro</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
     {{ Form::open(array('action' => 'Descripcion_especificacionController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_show') }}
         {{ Form::hidden('id_show2') }}
       {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
       <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
       </div>
       {{ Form::close() }}
     </div>
   </div>
 </div>
</div>


<!-- model insertar-->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog"  aria-labelledby="insertModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="insertModalLabel">Insertar Nuevo Registro</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
     <?php
          
         
       $query2 = "select concat(auto.marca,' ',auto.modelo)as nombre,auto.id_auto from auto ";

       $data2=DB::select($query2);

       ?>

     {{ Form::open(array('action' => 'Descripcion_especificacionController@insertar', 'method' => 'post','id'=>'descripcion_especificacion','name'=>'descripcion_especificacion')) }}
 
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Autos:</label>
           <select class="form-control" name="auto_show" required  id="auto_show" >
           <option value="" disabled selected>Elige un auto</option>
           @foreach ($data2 as $item)
           <option value="{{ $item->id_auto }}" > {{ $item->nombre }} </option>
           @endforeach    </select>
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Especificación:</label>
          <select id="especificacion_show"  name="especificacion_show" required ></select>
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Descripción:</label>
         {!! Form::textarea('descripcion_show', null, ['id' => 'descripcion_show', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
         </div>


         <div class="modal-footer">
       {!! Form::submit( 'Insertar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
       {{ Form::close() }}
     </div>
   </div>
 </div>
</div>

<!-- model editar -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog"  aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="editModalLabel">Editar Registro</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      {{ Form::open(array('action' => 'Descripcion_especificacionController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
        <div class="form-group">
           {{ Form::hidden('id_show', '', array('id' => 'id_show',  'placeholder' => 'Id')) }}
            {{ Form::hidden('id_show2', '', array('id' => 'id_show2',  'placeholder' => 'Id')) }}
        </div>
        <div class="form-group">
           <label for="recipient-name" class="col-form-label">Descripcion:</label>
         {!! Form::textarea('descripcion_show', null, ['id' => 'descripcion_show', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
         </div>

        <div class="modal-footer">
      {!! Form::submit( 'Actualizar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
</div>

@section('scripts')
<script type="text/javascript">

$('#editModal').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id_auto = button.data('id')
var id_especificacion = button.data('id2')
var descripcion=button.data('descripcion')



var modal = $(this)
modal.find('#id_show').val(id_auto)
modal.find('#id_show2').val(id_especificacion)
modal.find('#descripcion_show').val(descripcion)


});

$(document).ready(function() {
 var oTable = $('#table_id').dataTable( {
   "scrollX": true,
   "autoWidth": false,
         "responsive": true,
        "paging": true,
   "language": {
               "emptyTable":            "No hay datos disponibles en la tabla.",
               "info":                       "_START_ - _END_ de _TOTAL_ ",
               "infoEmpty":            "Vacío",
               "infoFiltered":            "",
               "infoPostFix":            "(Resultados)",
               "lengthMenu":            "Mostrar _MENU_ registros",
               "loadingRecords":        "Cargando...",
               "processing":            "Procesando...",
               "search":                "Buscar:",
               "searchPlaceholder":    "Dato para buscar",
               "zeroRecords":            "No se han encontrado coincidencias.",
               "paginate": {
                   "first":            "Primera",
                   "last":                "Última",
                   "next":                "Siguiente",
                   "previous":            "Anterior"
               },
               "aria": {
                   "sortAscending":    "Ordenación ascendente",
                   "sortDescending":    "Ordenación descendente"
               }
           },
           "lengthMenu":        [[ 10, 20, 25, 50, -1], [ 10, 20, 25, 50, "Todos"]],
           "iDisplayLength":    10,
           "bJQueryUI":        false,
           "columns" : [
               {"data": 0},
               {"data": 1},
               {"data": 2},
               {"data": 3,'orderable': false, 'searchable': false}
               
              
           ],

           "dom": "<'row'<'col-sm-7 col-md-4'l><'col-sm-6 col-md-3'f>>" +
                  "<'row'<'col-sm-13 col-md-11' tr>>" +
                  "<'row'<'col-sm-7 col-md-4'i><'col-sm-6 col-md-3'p>>",

 });
       $('label').addClass('form-inline');
       $('select, input[type="search"]').addClass('form-control input-sm');
 
 /*$(window).bind('resize', function () {
   table.columns.adjust().draw();
 } );*/
} );

</script>
<script type="text/javascript">

$('#deleteModal').on('show.bs.modal', function (event) {
 var button = $(event.relatedTarget)
 var id = button.data('id')
 var id2 = button.data('id2')
 var carro=button.data('carro')
 var especificacion=button.data('especificacion')
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el auto: ' +carro+' con su especificacion: '+ especificacion+'?')
 document.forms[0].id_show.value=id
 document.forms[0].id_show2.value=id2
});

</script>

<script>
var id_auto="";
var select = document.getElementById('auto_show');
select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    //alert(selectedOption.value + ': ' + selectedOption.text);
    id_auto=selectedOption.value;
    //alert(id_auto);
    
       var token = '{{csrf_token()}}';// ó $("#token").val() si lo tienes en una etiqueta html.
    var data={id_auto:id_auto,_token:token};
    $.ajax({
        type: "post",
        url: "/esp_faltantes",
        data: data,
        success: function (msg) {
            //alert("Mensaje enviado"+msg);
            
       /*              <div class="form-group">
           <label for="recipient-name" class="col-form-label">Autos:</label>
           <select class="form-control" name="auto_show" required  id="auto_show" >
           <option value="" disabled selected>Elige un auto</option>
           @foreach ($data2 as $item)
           <option value="{{ $item->id_auto }}" > {{ $item->nombre }} </option>
           @endforeach    </select>
         </div>*/
            //console.log(msg);
            var A_especificaciones = JSON.parse(msg);
            document.getElementById("especificacion_show").innerHTML = '<option value="" disabled selected>Elige una Especificación</option>';
            //console.log(A_especificaciones);
            //console.log(A_especificaciones[0]["id_especificacion"]);


            for(var i=0; i<A_especificaciones.length;i++)
            {
                document.getElementById("especificacion_show").innerHTML +='<option value="'+A_especificaciones[i]["id_especificacion"]+'" >'+A_especificaciones[i]["especificacion"]+'</option>'
                     console.log(A_especificaciones[i]["id_especificacion"]);
            }
        }
    }); 

  });

</script>
@stop

@stop