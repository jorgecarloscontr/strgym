<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = ['id'];

    public function asistencias()
    {
        return $this->hasMany('App\Asistencia');
    }
    public function rutina()
    {
        return $this->hasOne(Rutina::class);
    }
}
