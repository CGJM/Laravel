<?php

namespace App\Http\Controllers\views;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\carrerupt;
use App\group;

class vistas extends Controller
{
    public function index(){
      return view('dashboard');
    }
    public function inicioSesion(){
      return view('forms.acceso');
    }
    public function backaend(){
      return view('windows.index');
    }
    public function registerStudent(){
      $carrer=carrerupt::all();
      $group=group::all();
      return view('forms.registerStudent',compact('carrer'));
    }
}
