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
* @Description: Modelo/entidad Validaciones que aplican a un campo
*/
class Validaciones extends Model
{
    use HasFactory;
    // nombre tabla/entidad
    protected $table = 'validaciones';
    protected $fillable = [
        'id',
        'nombre',
        'estado'
    ];

    // Intento de query con eloquent :(
    public function getValidacionesByCampo($id = NULL)
    {
        return $this->belongsToMany( '\App\Models\CampoValidacion', '\App\Models\Campos' )->withPivot('id','campo_id','validacion_id');
    }
}
