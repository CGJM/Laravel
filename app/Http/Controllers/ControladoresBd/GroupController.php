<?php

namespace App\Http\Controllers\ControladoresBd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\group;

class GroupController extends Controller
{
    public function getAllGroup(){
        $group=group::all();
        return $group;
    }
    //Agregar
    public function addGroup(Request $request){
        $carrer=group::create($request->all());
        return $carrer;

    }
    //obtener un solo registro
    public function getGroup($idGroup){
        $group=group::where('groupA',$idGroup)->first();
        return $group;
    }
    //Modificar
    public function editGroup($idCarrer,Request $request){
        $modif=group::where('groupA','=',$idCarrer)->update($request->all());
        return $modif;

    }
    //eliminar
    public function deleteGroup($idCarrer){
        $delete=group::where('groupA','=',$idCarrer)->delete();
        return $delete;
    }
}
