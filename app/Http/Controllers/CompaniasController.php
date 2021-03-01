<?php

namespace App\Http\Controllers;

use App\Models\compania;
use App\Models\User;
use Illuminate\Http\Request;

class CompaniasController extends Controller
{
    public function index(){
        $companias = compania::all();
        return view('companias.index',compact('companias'));
    }
    public function create(){
        return view('companias.create');
    }
    public function store(Request $request){
        $compania = new compania();

        $compania->nombre=$request->nombre;
        $compania->email=$request->email;
        $compania->logo=$request->logo;
        $compania->website=$request->website;
        $compania->save();

        return redirect()->route('companias');
    }
    public function edit(compania $compania){
        return view('companias.edit',compact('compania'));
    }
    public function update(Request $request, compania $compania){
        $compania->nombre=$request->nombre;
        $compania->email=$request->email;
        $compania->logo=$request->logo;
        $compania->website=$request->website;
        $compania->save();
        return redirect()->route('companias');
    }
}
