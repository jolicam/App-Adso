<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicioMecanico extends Model
{
    use HasFactory;

    protected $fillable = [ 'servicio_id','mecanico_id','repuesto_id' ];
}
