<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps=false;
    protected $fillable = ['tipo','nombre','stock','precio'];
    public function ventas()
    {
        return $this->belongsToMany(Venta::class)->withPivot('fecha');
    }
    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = strtoupper($nombre);
    }
}
