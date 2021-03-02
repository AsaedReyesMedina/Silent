<?php

namespace App\Http\Controllers;

use App\Models\compania;
use App\Models\empleado;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmpleados;

class EmpleadosController extends Controller
{
    public function index(){
        
        $empleados = empleado::all();
        return view('empleados.index',compact('empleados'));
    }
    public function create(){
        $companias = compania::all();
        return view('empleados.create',compact('companias'));
    }
    public function store(StoreEmpleados $request){

        

        $empleado = new empleado();

        $empleado->primer_nombre=$request->nombre;
        $empleado->last_name=$request->apellido;
        $empleado->email=$request->email;
        $empleado->telefono=$request->telefono;
        $empleado->genero=$request->genero;
        $empleado->compania_id=$request->compania;
        $empleado->save();

        return redirect()->route('empleados');
    }
    public function edit(empleado $empleado){
        $companias = compania::all();
        return view('empleados.edit',compact('empleado'),compact('companias'));
    }
    public function update(Request $request, empleado $empleado){
        $empleado->primer_nombre=$request->nombre;
        $empleado->last_name=$request->apellido;
        $empleado->email=$request->email;
        $empleado->telefono=$request->telefono;
        $empleado->genero=$request->genero;
        $empleado->compania_id=$request->compania;
        $empleado->save();
        return redirect()->route('empleados');
    }
}
