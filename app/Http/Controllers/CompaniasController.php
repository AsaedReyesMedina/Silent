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
}
