<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table='schedule';
    public $timestamps = false;
    protected $fillable=array('idHorario','group','nameCarrer','hour','day','nameSubject','numberAccount');
}
