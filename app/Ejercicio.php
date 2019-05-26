<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    protected $fillable = ['nombre','grupo','descripcion'];
    public function rutinas()
    {
        return $this->belongsToMany(Rutina::class)->withPivot('series','repeticiones','dia');
    }
}
