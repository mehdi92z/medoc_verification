@extends('admin.layout.adminlte')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="{{asset('admin/dist/img/user8-128x128.jpg')}}" alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$patient->nom . ' ' . $patient->prenom .'.' }}</h3>

            <p class="text-muted text-center">{{$patient->fidel ? 'Fidel' : 'non Fidel'}}</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Telephone</b> <br>
                 <b  style="color: #1E90FF">{{$patient->telephone}}</b>
              </li>
              <li class="list-group-item">
                <b>Adresse :</b> <br>
                 <b  style="color: #1E90FF">{{$patient->adresse}}</b>
              </li>
              <li class="list-group-item">
                <b>Remarque : </b> <br>
                <b  style="color: #1E90FF">{{$patient->remarque}}</b>
              </li>
              <li class="list-group-item">
                <b>Maladie : </b> <br>
                <b  style="color: #1E90FF">{{$patient->maladie}}</b>
              </li>
            </ul>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activité</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Modifer</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
              <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                      
                      <table id="patients_table" class="table table-bordered table-hover">
                          <thead>
                              <tr>
                                  <th>Nom </th>
                                  <th>Prenom</th>
                                  <th>Telephone</th>
                                  <th>Adresse</th>
                                  <th>Remarque</th>
                                  <th>Fidel</th>
                                  <th>Maladie</th>
                                  <th>Action</th>    
                                  
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ([1,2,3] as $b)
                                <tr>
                                    <td>good job nigga</td>
                                    <td>good job nigga</td>
                                    <td>good job nigga</td>
                                    <td>good job nigga</td>
                                    <td>good job nigga</td>
                                    <td>good job nigga</td>
                                    <td>good job nigga</td>
                                    <td><button type="buton" class="btn btn-success">Facture</button></td>
                                </tr>
                                
                            @endforeach
    
                        </tbody>
                    </table>
            
                </div>





              <div class="tab-pane" id="settings">
                <form class="form-horizontal" method="post" action="{{route('patients.update',['id'=>$patient->id])}}">
                    @method('put')
                    @csrf
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name" name='nom' value="{{old('nom',$patient->nom)}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name='prenom' value='{{old('prenom',$patient->prenom)}}'>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName2" placeholder="Name" name='telephone' value='{{old('telephone',$patient->telephone)}}'>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Maladie</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName2" placeholder="Name" name='maladie' value='{{old('maladie',$patient->maladie)}}'>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience" name='adresse'>{{old('maladie',$patient->adresse)}}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Remarque</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Remarque" name='remarque' value='{{old('remarque',$patient->remarque)}}'>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Fidel</label>
                    <div class="col-sm-10">
                        <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary1" name="fidel" {{$patient->fidel? 'checked' : ''}}  value="1">
                              <label for="radioPrimary1">
                                  OUI
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="radioPrimary2" name="fidel" {{$patient->fidel? '' : 'checked'}} value="0">
                              <label for="radioPrimary2">
                                  NON
                              </label>
                            </div>
                          </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
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
                "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#patients_table_wrapper .col-md-6:eq(0)');
        });
    </script>

@endsection