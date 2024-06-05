<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('accidente/store', [accidenteController::class,'store'])->name('accidente.store');
Route::get('accidente/create',[accidenteController::class,'create']);
Route::get('accidente/listar',[accidenteController::class,'index'])->name('accidente.index');
Route::get('accidente/{accidente}',[accidenteController::class,'show'])->name('accidente.show');
Route::delete('accidente/{accidente}',[accidenteController::class,'destroy'])->name('accidente.destroy');
Route::put('accidente/{accidente}',[accidenteController::class,'update'])->name('accidente.update');
Route::get('accidente/{accidente}/editar',[accidenteController::class,'edit'])->name('accidente.edit');
