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

Route::middleware(['auth:sanctum', 'verified'])->post('/companias',[CompaniasController::class,'store']
)->name('companias.store');

Route::middleware(['auth:sanctum', 'verified'])->post('/companias/{compania}/edit',[CompaniasController::class,'edit']
)->name('companias.edit');

Route::middleware(['auth:sanctum', 'verified'])->put('/companias/{compania}',[CompaniasController::class,'update']
)->name('companias.update');



Route::middleware(['auth:sanctum', 'verified'])->get('/empleados',[EmpleadosController::class,'index']
)->name('empleados');

Route::middleware(['auth:sanctum', 'verified'])->get('/empleados/create',[EmpleadosController::class,'create']
)->name('empleadoscreate');

Route::middleware(['auth:sanctum', 'verified'])->post('/empleado',[EmpleadosController::class,'store']
)->name('empleados.store');

Route::middleware(['auth:sanctum', 'verified'])->post('/empleado/{empleado}/edit',[EmpleadosController::class,'edit']
)->name('empleados.edit');

Route::middleware(['auth:sanctum', 'verified'])->put('/empleados/{empleado}',[EmpleadosController::class,'update']
)->name('empleados.update');


