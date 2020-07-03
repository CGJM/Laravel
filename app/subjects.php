<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    protected $table='subjects';
    public $timestamps = false;
    protected $fillable=array('nameSubject','nameCarrer','quarters');
}
