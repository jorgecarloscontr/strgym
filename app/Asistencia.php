<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public $timestamps=false;
    protected $guarded = ['id'];
    
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
