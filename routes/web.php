<?php

use App\Http\Controllers\{
    HomeController,
    PacienteController,
    MedicoController
};
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect('home');
});

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::resource('/paciente', PacienteController::class);
Route::resource('/medico', MedicoController::class);
Route::resource('/consulta', ConsultaController::class);
