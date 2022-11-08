<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory; 
    protected $table = 'ofertas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'titulo', 'slug',
        'descripcion_corta', 'description', 'experiencia',
        'idioma', 'escolaridad', 'pais',
        'departamento', 'ciudad', 'salario',
        'fecha_contratacion', 'tipo_contrato', 'categoria',
        'duracion', 'fecha_inicio', 'fecha_fin', 
        'activa', 'imagen', 'dominio',
        'formulario', 'empresa_id'
    ];
}
