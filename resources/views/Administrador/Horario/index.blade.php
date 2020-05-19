@extends('welcome2')
@section('contenido')


<div class="container justify-content-center align-items-center">
  <br>
<h2>Administración del horario</h2>
  <div class="table-responsive" style=" border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;">
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="width:auto">
          <thead>
          <tr>
              <th>Dia</th>
              <th>Horas</th>
              <th>Editar horas</th>
            
          </tr>
          </thead>
          <tbody>
          @foreach($autos as $auto)
              <tr>
              <td>{{ $auto->dia}}</td>
                  <td>{{ $auto->horas}}</td>
                  
                  <td>
                      
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-hora1="<?php echo $auto->hora_inicial;?>" data-hora2="<?php echo $auto->hora_final;?>"  data-id="<?php echo $auto->id_horario;?>" >Editar</button>
                  </td>

              </tr>
          @endforeach
          </tbody>
      </table>
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
      {{ Form::open(array('action' => 'HorarioController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
        <div class="form-group">
           
            {{ Form::hidden('id_show', '', array('id' => 'id_show',  'placeholder' => 'Id')) }}
        </div>
         <div class="form-group">
          <label for="recipient-name" class="col-form-label">Hora inicial:</label>
           {{ Form::text('hora1_show', '', array('id' => 'hora1_show',  'placeholder' => 'ejemplo : 7:00' ,'required' => 'required')) }}   
        </div>
         <div class="form-group">
          <label for="recipient-name" class="col-form-label">Hora final:</label>
           {{ Form::text('hora2_show', '', array('id' => 'hora2_show',  'placeholder' => 'ejemplo : 7:00' ,'required' => 'required')) }}   
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
var id_horario = button.data('id')
var hora_inicial = button.data('hora1')
var hora_final=button.data('hora2')



var modal = $(this)
modal.find('#id_show').val(id_horario)
modal.find('#hora1_show').val(hora_inicial)
modal.find('#hora2_show').val(hora_final)

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
 var id2 = button.data('id2')
 var carro=button.data('carro')
 var especificacion=button.data('especificacion')
 var modal = $(this)
 modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el auto: ' +carro+' con su especificacion: '+ especificacion+'?')
 document.forms[0].id_show.value=id
 document.forms[0].id_show2.value=id2
});

</script>
@stop

@stop