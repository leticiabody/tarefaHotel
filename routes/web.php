<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospedesController;
/*GET SERVE PARA MOSTRAR*/
Route::get('/', [HospedesController::class,'index'])->name('index');
Route::get('/formHospedes',[HospedesController::class,'showFormHosp'])->name('formulario-hospedes'); 
Route::post('/cadastrar',[HospedesController::class,'storeHospedes'])->name('cadastrar-hospedes');

Route::get('/todosHospedes',[HospedesController::class,'showGerenciador'])->name('todos-Hospedes');

Route::delete('/delete-Hospedes/{id}',[HospedesController::class,'destroy'])->name('delete-Hospedes');

//partes do alterar
Route::get('/alterar/{id}',[HospedesController::class,'show'])->name('alterar-Hospedes');

Route::put('/alterarBanco/{id}',[HospedesController::class,'update'])->name('alterarBanco-Hospedes');

