@extends('welcome2')
@section('contenido')


<div class="container justify-content-center align-items-center">
  <br>
  <h2>Ventana de clientes</h2>
  <div class="table-responsive" style=" border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;">
      <table  id="table_id"class="table table-condensed table-striped table-bordered" style="width:auto">
          <thead>
          <tr>
              <th>Nombre del cliente</th>
              <th>Email</th>
              <th>Teléfono</th>
              <th>Precio</th>
              <th>Carro</th>
          </tr>
          </thead>
          <tbody>
          @foreach($contacto as $auto)
              <tr>
                  <td>{{ $auto->nombre}}</td>
                  <td><a href="mailto:{{$auto->correo}}" target="_blank">{{ $auto->correo}}</a></td>
                  <td><a href="tel:{{$auto->telefono}}" target="_blank">{{ $auto->telefono}}</a></td>
                  <td>{{ $auto->precio}}</td>
                  <td>{{ $auto->carro}}</td>
              </tr>
          @endforeach
          </tbody>
      </table>
      </div>
</div>




@section('scripts')
<script type="text/javascript">


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
               {"data": 3},
               {"data": 4,'orderable': false, 'searchable': false}
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

@stop

@stop