<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function index(){
        return Paciente::all();
    }

    public function getPets(){
        return Paciente::where('veterinario_id','=',$_GET['id'])->get();
    }

    public function insertPet(Request $req){
        $pet = new Paciente();
        $pet->nombre_mascota = $req->nombre_mascota;
        $pet->propietario = $req->propietario;
        $pet->email = $req->email;
        $pet->sintomas = $req->sintomas;
        $pet->veterinario_id = $req->veterinario_id;

        $pet->save();
        return "Agregado correctamente";
    }


    public function updatePet(Request $req){
        $pet = Paciente::findOrFail($req->id);
        $pet->nombre_mascota = $req->nombre_mascota;
        $pet->propietario = $req->propietario;
        $pet->email = $req->email;
        $pet->sintomas = $req->sintomas;
        $pet->veterinario_id = $req->veterinario_id;

        $pet->save();
        return $pet;
    }


    public function deletePet(){
      Paciente::destroy($_GET['id']);
      return "Eliminado correctamente";
    }

}
