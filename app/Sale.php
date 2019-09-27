<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'Id', 'client_id', 'services_id', 'fecha_venta', 'fecha_pago', 'nota_cobro'
    ];
}
