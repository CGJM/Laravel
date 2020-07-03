<?php

namespace App\Http\Controllers\ControladoresBd;

use Illuminate\Http\Request;
use App\subjects;
use App\Http\Controllers\Controller;

class SubjectController extends Controller
{
    public function getAllSubject(){
        $subjects=subjects::all();
        return $subjects;
    }
    //Agregar
    public function addSubject(Request $request){
        $subject=subjects::create($request->all());
        return $subject;

    }
    //obtener un solo registro
    public function getSubject($idSubject){
        $subject=subjects::where('nameSubject',$idSubject)->first();
        return $subject;
    }
    //Modificar
    public function editSubject($idSubject,Request $request){
        $modif=subjects::where('nameSubject','=',$idSubject)->update($request->all());
        return $modif;

    }
    //eliminar
    public function deleteCarrer($idSubject){
        $delete=subjects::where('nameSubject','=',$idSubject)->delete();
        return $delete;
    }
}
