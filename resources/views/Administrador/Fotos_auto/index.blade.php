@extends('welcome2')
@section('contenido')

<div class="container justify-content-center align-items-center">
  <br><br>
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>

  <div class="table-responsive" >
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="width:auto">
          <thead>
          <tr>
          <th>Auto</th>
              <th>Auto</th>
             
              <th>Foto</th>
            
          </tr>
          </thead>
          <tbody>
          @foreach($fotos as $auto)
              <tr>
              <td>{{ $auto->carro}}</td>
              <td><img src='{{ $auto->foto}}' width="200px" height="200px"></td>
                  <td>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $auto->id_foto;?>" data-foto="<?php echo $auto->foto;?>">Eliminar</button>
                      
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-foto="<?php echo $auto->foto;?>"   data-id="<?php echo $auto->id_foto;?>">Editar</button>

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
     {{ Form::open(array('action' => 'Fotos_autoController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
         </div>
         <div class="modal-footer">
         {{ Form::hidden('id_show') }}
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

     {{ Form::open(array('action' => 'Fotos_autoController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform','enctype'=>'multipart/form-data')) }}

         
       
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fotos de los autos:</label>
           <select class="form-control" name="auto_show" required>
           <option value="" disabled selected>Elige un auto</option>
           @foreach ($data2 as $item)
           <option value="{{ $item->id_auto }}" > {{ $item->nombre }} </option>
           @endforeach    </select>
         </div>
         
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Fotos del auto:</label>
           {{ Form::file('foto_show', array('id' => 'foto_show')) }}
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
      {{ Form::open(array('action' => 'Fotos_autoController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
        <div class="form-group">
           {{ Form::hidden('id_show', '', array('id' => 'id_show',  'placeholder' => 'Id')) }}
            
        </div>
         <div class="form-group">
           <label for="recipient-name" class="col-form-label">Foto:</label>
         {!! Form::textarea('foto_show', null, ['id' => 'foto_show', 'rows' => 4, 'cols' => 54, 'style' => 'resize:none','required' => 'required']) !!}
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
var id_foto = button.data('id')
var foto=button.data('foto')



var modal = $(this)
modal.find('#id_show').val(id_foto)
modal.find('#foto_show').val(foto)


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
           "lengthMenu":        [[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
           "iDisplayLength":    5,
           "bJQueryUI":        false,
           "columns" : [
               {"data": 0},
               {"data": 1},
               {"data": 2,'orderable': false, 'searchable': false}

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
 var foto=button.data('foto')
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar la foto: ' +foto+'?')
 document.forms[0].id_show.value=id
});

</script>
@stop

@stop