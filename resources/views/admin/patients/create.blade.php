@extends('admin.layout.adminlte')

@section('content')

    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="container">

                <form class="form-horizontal" method="post" action="{{route('patients.store')}}">
                    @csrf
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName"  name='nom' value="{{old('nom')}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Prenom</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail"  name='prenom' value='{{old('prenom')}}'>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2"  name='telephone' value='{{old('telephone')}}'>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Maladie</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2"  name='maladie' value='{{old('maladie')}}'>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Adresse</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience"  name='adresse'>{{old('maladie')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Remarque</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills"  name='remarque' value='{{old('remarque')}}'>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Fidel</label>
                        <div class="col-sm-10">
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary1" name="fidel"   value="1">
                                <label for="radioPrimary1">
                                    OUI
                                </label>
                                </div>
                                <div class="icheck-primary d-inline">
                                <input type="radio" id="radioPrimary2" name="fidel" checked value="0">
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
        </div>
    </div>


@endsection