<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table='teacher';
    public $timestamps = false;
    protected $fillable=array('numberAccount','nameTeacher','lastNameP','lastNameM','nameCarrer');
}
