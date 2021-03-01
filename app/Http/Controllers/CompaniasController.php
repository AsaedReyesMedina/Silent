<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniasController extends Controller
{
    public function index(){
        return view('companias.index');
    }
    public function create(){
        return view('companias.create');
    }
}
