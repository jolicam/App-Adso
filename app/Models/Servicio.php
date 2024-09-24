<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $fillable = [ 'descripcion','costo', 'fecha','vehiculo_placa','mecanico_id',];
    
}
