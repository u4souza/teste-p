<?php

use App\Http\Controllers\{
    HomeController,
    PacienteController,
    MedicoController,
    AgendamentoController
};
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


//PACIENTE
Route::controller(PacienteController::class)->group(function(){
    Route::get('paciente', 'index')->name('paciente.index');
    Route::post('paciente', 'store')->name('paciente.store');
    Route::get('paciente/create', 'create')->name('paciente.create');
    Route::get('paciente/{id}', 'show')->name('paciente.show');
    Route::put('paciente/{id}', 'update')->name('paciente.update');
    Route::delete('paciente/{id}', 'destroy')->name('paciente.destroy');
    Route::get('paciente/{id}/edit', 'edit')->name('paciente.edit');
});

//MEDICOS
Route::controller(MedicoController::class)->group(function(){
    Route::get('medico', 'index')->name('medico.index');
    Route::post('medico', 'store')->name('medico.store');
    Route::get('medico/create', 'create')->name('medico.create');
    Route::get('medico/{id}', 'show')->name('medico.show');
    Route::put('medico/{id}', 'update')->name('medico.update');
    Route::delete('medico/{id}', 'destroy')->name('medico.destroy');
    Route::get('medico/{id}/edit', 'edit')->name('medico.edit');
});

//AGENDAMENTO
Route::controller(AgendamentoController::class)->group(function(){
    Route::get('agendamento', 'index')->name('agendamento.index');
    Route::post('agendamento', 'store')->name('agendamento.store');
    Route::get('agendamento/create', 'create')->name('agendamento.create');
    Route::get('agendamento/{id}', 'show')->name('agendamento.show');
    Route::put('agendamento/{id}', 'update')->name('agendamento.update');
    Route::delete('agendamento/{id}', 'destroy')->name('agendamento.destroy');
    Route::get('agendamento/{id}/edit', 'edit')->name('agendamento.edit');
});



