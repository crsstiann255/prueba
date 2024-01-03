<?php

use App\Http\Controllers\AnimalesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('animales/index',[AnimalesController::class,'index'])->name('animales.index');
route::get('animales/create',[AnimalesController::class,'create'])->name('animales.create');
route::post('animales',[AnimalesController::class,'store'])->name('animales.store');
route::get('animales/{id}/',[AnimalesController::class,'show'])->name('animales.show');
route::get('animales/{id}/edit',[AnimalesController::class,'edit'])->name('animales.edit');
route::put('animales/{id}',[AnimalesController::class,'update'])->name('animales.update');
route::delete('animales/{id}',[AnimalesController::class,'destroy'])->name('animales.destroy');
