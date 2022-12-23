<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Pacientes
Route::get('/pacientes','App\Http\Controllers\PacienteController@index');
Route::get('/pacientes/veterinario','App\Http\Controllers\PacienteController@getPets');
Route::post('/pacientes/add','App\Http\Controllers\PacienteController@insertPet');
Route::put('/pacientes/update/{id}','App\Http\Controllers\PacienteController@updatePet');
Route::delete('/pacientes/delete','App\Http\Controllers\PacienteController@deletePet');

//Veterinarios
Route::get('/veterinarios','App\Http\Controllers\VeterinarioController@index');
Route::post('/veterinarios/insert','App\Http\Controllers\VeterinarioController@insertVeterinary');
Route::put('/veterinarios/update','App\Http\Controllers\VeterinarioController@updateVeterinary');
Route::delete('/veterinarios/delete','App\Http\Controllers\VeterinarioController@deleteVeterinary');