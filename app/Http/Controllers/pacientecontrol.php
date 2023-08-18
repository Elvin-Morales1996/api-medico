<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class pacientecontrol extends Controller
{
    //traer los todos los datos
    public function index(){
        $pacientes = patient::all();
        return $pacientes;
    }

    //antes se hacia esto laravel version 8
    //$request = {"name: elvin","age":123}
    public function store(Request $request){
        $patient = patient::create($request->all());
        return response()->json($patient,201);

    }

    public function update(Request $request, string $id){
        $pacient = patient::findOrFail($id);
        $pacient->update($request->all());
        return response()->json($pacient,200);

    }
}
