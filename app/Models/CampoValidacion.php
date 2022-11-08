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
* @Description: Relacion tabla campos y validacion
*/
class CampoValidacion extends Model
{
    use HasFactory;
     // nombre tabla/entidad
    protected $table = 'campo_validacion';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'campo_id',
        'validacion_id'
    ];

    // Intento de query con eloquent :(
    public function getValidacionesByCampo($id = NULL)
    {
        return $this->belongsToMany( '\App\Models\CampoValidacion', '\App\Models\Validaciones' )->withPivot('id','campo_id','validacion_id');
    }
}
