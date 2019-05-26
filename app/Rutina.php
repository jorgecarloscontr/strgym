<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    protected $fillable = ['nombre','descripcion','fecha'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function ejercicios()
    {
        return $this->belongsToMany(Ejercicio::class)->withPivot('series','repeticiones','dia');
    }
}
