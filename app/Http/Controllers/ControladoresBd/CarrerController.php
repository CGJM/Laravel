<?php

namespace App\Http\Controllers\ControladoresBd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\carrerupt;

class CarrerController extends Controller
{
    public function getAllCarrer(){
        $carrer=carrerupt::all();
        return $carrer;
    }
    //Agregar
    public function addCarrer(Request $request){
        $carrer=carrerupt::create($request->all());
        return $carrer;

    }
    //obtener un solo registro
    public function getCarrer($idCarrer){
        $carrer=carrerupt::where('idCarrer',$idCarrer)->first();
        return $carrer;
    }
    //Modificar
    public function editCarrer($idCarrer,Request $request){
        $modif=carrerupt::where('idCarrer','=',$idCarrer)->update($request->all());
        return $modif;

    }
    //eliminar
    public function deleteCarrer($idCarrer){
        $delete=carrerupt::where('idCarrer','=',$idCarrer)->delete();
        return $delete;
    }
}
