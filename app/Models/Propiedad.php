<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedad';

    protected $fillable = [
        'direccion',
        'MetrosCuadrados',
        'habitaciones',
        'disponible => true',
    ];
    protected $casts = [
        'disponible' => 'boolean',
        'MetrosCuadrados' => 'decimal:2',
    ];

}
