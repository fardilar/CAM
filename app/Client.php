<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'Cedula_Nit', 'Nombre', 'Observaciones', 'Direccion', 'Telefono', 'Email'
    ];
}
