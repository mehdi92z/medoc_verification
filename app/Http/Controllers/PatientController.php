<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    function index(){
        return view('admin.patients.index');
    }

    function getPatients(){
        $patients = Patient::select('nom','prenom','telephone','adresse','maladie','fidel','remarque');
        return datatables($patients)->make(true);
    }
}
