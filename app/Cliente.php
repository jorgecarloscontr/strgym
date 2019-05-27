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
    public function membresias()
    {
        return $this->hasMany('App\Membresia');
    }
    public function ventas()
    {
        return $this->hasMany('App\Venta');
    }
    public function rutina()
    {
        return $this->hasOne(Rutina::class);
    }
    public function getNombreCompletoAttribute()
    {
        return $this->nombre . ' ' . $this->apellido;
    }
}
