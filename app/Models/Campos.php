<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

// Modelos requeridos
use App\Models\CampoValidacion;

/*
* @Author: nelson.liberato
* @Email:  nelson.liberato@hotmail.com
* @Date:   2022-11-05 18:15:29
* @Last Modified by: None
* @Last Modified time: None
* @Description: Modelo/entidad Campos
*/
class Campos extends Model
{
    use HasFactory;
    // nombre tabla/entidad
    protected $table = 'campos';
    /* The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
            'id',
            'nombre',
            'tipo',
            'descripcion',
            'estado'
    ];


    /*
    * @Author: nelson.liberato
    * @Email:  nelson.liberato@hotmail.com
    * @Date:   2022-11-05 18:15:29
    * @Last Modified by: None
    * @Last Modified time: None
    * @Description: Consulta relacionando tablas con informacion de los campos disponibles 
    */
    public function getCamposAll()
    {
        // Query de campos, validaciones y tipos de validacion con query builder :(
        $campos = DB::table('campos AS a')
            ->select('a.id', 'a.nombre AS campo', 'b.validacion_id', 'c.nombre AS validacion', 'd.nombre AS tipo_validacion', 'd.regla', 'd.mensaje_invalido')
            ->leftJoin('campo_validacion  AS b', 'a.id', '=', 'b.campo_id')
            ->leftJoin('validaciones AS c', 'b.validacion_id', '=', 'c.id')
            ->leftJoin('tipo_validacion  AS d', 'c.id', '=', 'd.id')
            ->get();
        return $campos;

    }

    /*
    * @Author: nelson.liberato
    * @Email:  nelson.liberato@hotmail.com
    * @Date:   2022-11-05 18:15:29
    * @Last Modified by: None
    * @Last Modified time: None
    * @Description: Consulta tipos de campo 
    */
    public function getCamposValidaciones($id = null)
    {
        
        $validaciones = DB::table('campo_validacion  AS a')
        ->select('b.id','b.nombre')
        ->leftJoin('validaciones AS b', 'a.validacion_id', '=', 'b.id')
        ->whereRaw('a.campo_id = :id', ['id' =>$id])
        ->get(); 
        //->toSql();
        return $validaciones;
    }

    /*
    * @Author: nelson.liberato
    * @Email:  nelson.liberato@hotmail.com
    * @Date:   2022-11-05 18:15:29
    * @Last Modified by: None
    * @Last Modified time: None
    * @Description: Consulta las n validaciones de un campo
    */
    public function getTiposValidacionByValidacion($id = null)
    {
        
        $validaciones = DB::table('validaciones  AS a')
        ->select('b.nombre','b.regla', 'b.mensaje_invalido')
        ->leftJoin('tipo_validacion AS b', 'b.validacion_id', '=', 'a.id')
        ->whereRaw('a.id = :id', ['id' =>$id])
        ->get(); 
        //->toSql();
        return $validaciones;
    }
}
