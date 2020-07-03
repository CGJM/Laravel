<?php

namespace App\Http\Controllers\ControladoresBd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\student;

class StudentController extends Controller
{
    public function getAllStudent(){
        $student=student::all();
        return $student;
    }
    //Agregar
    public function addStudent(Request $request){
        $student=student::create($request->all());
        return $student;

    }
    //obtener un solo registro
    public function getStudent($idStudent){
        $student=student::where('numberAccount',$idStudent)->first();
        return $idStudent;
    }
    //Modificar
    public function editStudent($idStudent,Request $request){
        $modif=student::where('numberAccount','=',$idStudent)->update($request->all());
        return $modif;

    }
    //eliminar
    public function deleteStudent($idStudent){
        $delete=student::where('numberAccount','=',$idStudent)->delete();
        return $delete;
    }
    
}
