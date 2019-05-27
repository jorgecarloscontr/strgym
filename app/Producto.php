<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
   // protected $fillable = ['tipo','nombre','stock','precio'];
    public function ventas()
    {
        return $this->belongsToMany(Venta::class)->withPivot('fecha');
    }
    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = strtoupper($nombre);
    }
}
