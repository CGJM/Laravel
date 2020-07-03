<?php

namespace App\Http\Controllers\ControladoresBd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\schedule;

class ScheduleController extends Controller
{
    public function getAllSchedule(){
        $schedule=schedule::all();
        return $schedule;
    }
    //Agregar
    public function addSchedule(Request $request){
        $schedule=schedule::create($request->all());
        return $schedule;

    }
    //obtener un solo registro
    public function getSchedule($idHorario){
        $schedule=schedule::where('idHorario',$idHorario)->first();
        return $schedule;
    }
    //Modificar
    public function editSchedule($idHorario,Request $request){
        $modif=schedule::where('idHorario','=',$idHorario)->update($request->all());
        return $modif;

    }
    //eliminar
    public function deleteSchedule($idHorario){
        $delete=schedule::where('idHorario','=',$idHorario)->delete();
        return $delete;
    }
}
