<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfertaCampo extends Model
{
    use HasFactory;
    protected $table = 'oferta_campo';
    protected $fillable = [
        'oferta_id', 'campo_id', 'nombre', 'descripcion', 'estado', 'obligatorio' 
    ];
}
