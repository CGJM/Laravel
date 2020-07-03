<?php

namespace App\Http\Controllers\ControladoresBd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\teacher;
use App\useralumns;
use App\User;
class TeacherController extends Controller
{

    public function getAllTeacher(){
        $teacher=teacher::all();
        return $teacher;
    }
    public function getAllLog(){
        $teacher=useralumns::all();
        return $teacher;
    }
    //Agregar
    public function addTeacher(Request $request){
        $teacher=teacher::create($request->all());
        return $teacher;

    }
    public function addUser(Request $request){
        $teacher=User::create($request->all());
        return $teacher;

    }
    //obtener un solo registro
    public function getTeacher($idTeacher){
        $teacher=teacher::where('numberAccount',$idTeacher)->first();
        return $teacher;
    }
    //Modificar
    public function editTeacher($idTeacher,Request $request){
        $modif=teacher::where('numberAccount','=',$idTeacher)->update($request->all());
        return $modif;

    }
    //eliminar
    public function deleteTeacher($idTeacher){
        $delete=teacher::where('numberAccount','=',$idTeacher)->delete();
        return $delete;
    }
}
