@extends('admin.layout.adminlte')

@section('content')

<h1>Liste des Patients</h1>


<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">
            <div class="card-header row">
                <div class="col-lg-6">
                    <h3 class="card-title">Liste des Patients</h3>
                </div>
                
                <span class="col-lg-4"></span>
                <a href="#" class="btn btn-primary col-lg-2">Nouveau patients</a>
            </div>
        </div>
        <div class="card-body">
            <table id="patients_table" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Nom </th>
                        <th>Prenom</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Remarque</th>
                        <th>Fidel</th>
                        <th>maladie</th>    
                        
                    </tr>
                </thead>
                <tbody>
                    
                
                
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@section('scripts')
    <!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
    $( document ).ready(function() {
        console.log( "ready!" );
   
        $('#patients_table').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "ordering" : false,
            "ajax" : "{{route('patients.api')}}",
            "columns" : [
                {'data' : 'nom'},
                {'data' : 'prenom'},
                {'data' : 'telephone'},
                {'data' : 'adresse'},
                {'data' : 'remarque'},
                {'data' : 'fidel'},
                {'data' : 'maladie'}
                
            ],
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#patients_table_wrapper .col-md-6:eq(0)');
    });
</script>

@endsection