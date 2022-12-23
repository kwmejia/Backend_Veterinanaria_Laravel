<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veterinario;
use App\Models\Paciente;

class VeterinarioController extends Controller
{
    public function index(){
        return Veterinario::all();
    }

    public function insertVeterinary(Request $req){
        $veterinary = new Veterinario();
        $veterinary->nombre = $req->nombre;
        $veterinary->apellidos = $req->apellidos;
        $veterinary->edad = $req->edad;
        $veterinary->save();
        return $req;
    }



    public function updateVeterinary(Request $req){
        $veterinary =  Veterinario::findOrFail($req->id);
        $veterinary->nombre = $req->nombre;
        $veterinary->apellidos = $req->apellidos;
        $veterinary->edad = $req->edad;
        $veterinary->save();
        return $req;

    }

    public function deleteVeterinary(){
        Veterinario::destroy($_GET['id']);
        return "Eliminado correctamente";
    }


}
