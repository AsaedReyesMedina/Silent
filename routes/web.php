<?php

use App\Http\Controllers\CompaniasController;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/companias',[CompaniasController::class,'index']
)->name('companias');

Route::middleware(['auth:sanctum', 'verified'])->get('/companias/create',[CompaniasController::class,'create']
)->name('companiascreate');

Route::middleware(['auth:sanctum', 'verified'])->get('/empleados',[EmpleadosController::class,'index']
)->name('empleados');

Route::middleware(['auth:sanctum', 'verified'])->get('/empleados/create',[EmpleadosController::class,'create']
)->name('empleadoscreate');


