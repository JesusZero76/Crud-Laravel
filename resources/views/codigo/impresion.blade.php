@extends('layouts.base')
@extends('welcome')
@section('contenido')

@section('css')
<link rel="stylesheet" href="{{asset('plantilla/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plantilla/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plantilla/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>E-mail</th>
                  </tr>
                  </thead>
                  <tbody>
              
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>E-mail</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
</div>
@endsection

@section('script')

<script src="{{asset('plantilla/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('plantilla/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plantilla/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plantilla/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection