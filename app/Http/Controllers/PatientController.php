<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    function index(){
        $patients = Patient::all();
        return view('admin.patients.index',compact('patients'));
    }

    function create(){
        return view('admin.patients.create');
    }

    
    function store(Request $request){
        $patient = Patient::create($request->all());
        $patients = Patient::all();
        return view('admin.patients.index',compact('patients'));
    }

    function show($id){
        $patient = Patient::findOrfail($id);
        return view('admin.patients.show',compact('patient'));
    }


    function update($id , Request $request){
        $patient = Patient::findOrfail($id);
        $patient->update($request->all());
        return back()->with('success','Patient Modifier avec Succes');
    }

    function getPatients(){
        $patients = Patient::select('nom','prenom','telephone','adresse','maladie','fidel','remarque');
        return datatables($patients)->make(true);
    }
}
