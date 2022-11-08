<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*
* @Author: nelson.liberato
* @Email:  nelson.liberato@hotmail.com
* @Date:   2022-11-05 18:15:29
* @Last Modified by: None
* @Last Modified time: None
* @Description: Modelo/entidad tipos validacion con las reglas de cada n validacion de un campo
*/
class TipoValidacion extends Model
{
    use HasFactory; 
    // nombre tabla/entidad
    protected $table = 'tipo_validacion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'validacion_id',
        'nombre',
        'regla',
        'mensaje_invalido',
        'estado'
    ];
 
}
