<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Veterinario;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable =['nombre_mascota','propietario','email','sintomas','veterinario_id'];
}
