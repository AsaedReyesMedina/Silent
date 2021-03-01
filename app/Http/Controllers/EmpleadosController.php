<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index(){
        $empleados = empleado::all();
        return view('empleados.index',compact('empleados'));
    }
    public function create(){
        return view('empleados.create');
    }
}
