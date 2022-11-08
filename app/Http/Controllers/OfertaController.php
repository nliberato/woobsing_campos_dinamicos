<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Modelos requeridos
use App\Models\Campos;
use App\Models\TipoValidacion;
 
/*
* @Author: nelson.liberato
* @Email:  nelson.liberato@hotmail.com
* @Date:   2022-11-05 18:15:29
* @Last Modified by: None
* @Last Modified time: None
* @Description: Controller para cargar acciones de oferta
*/
class OfertaController extends Controller
{
     

    /*
    * @Author: nelson.liberato
    * @Email:  nelson.liberato@hotmail.com
    * @Date:   2022-11-06 22:00:29
    * @Last Modified by: None
    * @Last Modified time: None
    * @Description: Funcion para cargar datos y mostrar vista de creacion de unn formulario
    */
    public function create()
    {
        return view('oferta.create')->with(['camposs' => []]);
    }

    /*
    * @Author: nelson.liberato
    * @Email:  nelson.liberato@hotmail.com
    * @Date:   2022-11-06 22:00:29
    * @Last Modified by: None
    * @Last Modified time: None
    * @Description: Funcion para cargar datos y mostrar vista de creacion de unn formulario
    */
    public function listaCampos()
    {
        $CamposModel = new Campos(); // INstancia modelo campos
        $mCampos = []; // array para campos, tipos y validaciones del campo
        $campos = Campos::all(); // Todos los campos disponibles (los campos disponibles de html: inputs, select, textarea)

        // Recorre los campos disponibles de html registrados en la tabla campos
        foreach ($campos as $index => $campo) {
            // Set de campos en el array
            $mCampos[$index] = ['id' => $campo -> id, 'campo' => $campo -> nombre, 'validacion' => null ];

            // consulta las validaciones que tiene el campo
            $validaciones = $CamposModel -> getCamposValidaciones($campo -> id); // Types
            foreach ($validaciones AS $mIndex2 => $mValidacion) {
                
                $mRegla = []; 
                $mTiposValida = TipoValidacion::where('validacion_id',$mValidacion -> id)->get(); // consulta las n validaciones de un campo con las reglas de validacion
    
                foreach ($mTiposValida AS $mIndex3 => $mTipoValida) {
                    $mRegla[] = ['id' => $mTipoValida -> id, 
                                 'nombre' => $mTipoValida -> nombre, 
                                 'regla' => $mTipoValida -> regla, 
                                 'mensaje_invalido' => $mTipoValida -> mensaje_invalido];
                }

                $mCampos[$index]['validacion'][] = ['id' =>$mValidacion -> id, 'nombre' => $mValidacion -> nombre, 'regla' => $mRegla ];
            }             
        }

        return $mCampos;
    }

}
