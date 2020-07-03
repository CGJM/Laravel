<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrerupt extends Model
{
    protected $table='carrerupt';
    public $timestamps = false;
    protected $fillable=array('nameCarrer','idCarrer');
}
