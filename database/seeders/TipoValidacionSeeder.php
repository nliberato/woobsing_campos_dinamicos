<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoValidacion;

class TipoValidacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            TipoValidacion::create(['validacion_id' => 1 , 'nombre' => 'Longitud máxima', 
                                    'regla' => '{campo} && {campo}.length >= {valor}', 
                                    'mensaje_invalido' => 'La longitud debe ser mayor a {valor}', 'estado' => '1' 
                                   ]);   
            TipoValidacion::create(['validacion_id' => 1 , 'nombre' => 'Longitud mínima', 
                                    'regla' => '{campo} && {campo}.length <= {valor}', 
                                    'mensaje_invalido' => 'La longitud debe ser menor a {valor}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 2 , 'nombre' => 'Mayor a', 
                                    'regla' => '{campo} > {valor}' , 
                                    'mensaje_invalido' => 'El valor debe ser mayor a {valor}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 2 , 'nombre' => 'Menor a', 
                                    'regla' => '{campo} < {valor}' , 
                                    'mensaje_invalido' => 'El valor debe ser mayor a {valor}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 2 , 'nombre' => 'Igual a', 
                                    'regla' => '{campo} == {valor}' , 
                                    'mensaje_invalido' => 'El valor debe ser igual a {valor}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 2 , 'nombre' => 'Diferente a', 
                                    'regla' => '{campo} != {valor}' , 
                                    'mensaje_invalido' => 'El valor debe ser diferente a {valor}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 2 , 'nombre' => 'Entre', 
                                    'regla' => '{campo} >= {valor1} && {campo} <= {valor2}', 
                                    'mensaje_invalido' => 'El valor debe estar entre {valor1} y {valor2}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 3 , 'nombre' => 'Longitud máxima', 
                                    'regla' => '{campo} && {campo}.length >= {valor}', 
                                    'mensaje_invalido' => 'La longitud debe ser mayor a {valor}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 3 , 'nombre' => 'Longitud mínima', 
                                    'regla' => '{campo} && {campo}.length <= {valor}', 
                                    'mensaje_invalido' => 'La longitud debe ser menor a {valor}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 4 , 'nombre' => 'Formato fecha', 
                                    'regla' => '{campo}.match(/^[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$)', 
                                    'mensaje_invalido' => 'El formato de la fecha debe ser {yyyy-mm-dd}', 'estado' => '1' 
                                   ]);   
            TipoValidacion::create(['validacion_id' => 5 , 'nombre' => 'Formato fecha y hora', 
                                    'regla' => '{campo}.match(/^[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9] [0-9][0-9]:[0-9][0-9]$)', 
                                    'mensaje_invalido' => 'El formato de la fecha y hora debe ser {yyyy-mm-dd hh:ii}', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 6 , 'nombre' => 'Peso mínimo archivo' , 
                                    'regla' => '{campo}.sizeof < {100}' , 
                                    'mensaje_invalido' => 'El peso mínimo debe ser de {100} Kb', 'estado' => '1'  
                                   ]);

            TipoValidacion::create(['validacion_id' => 6 , 'nombre' => 'Peso máximo archivo' , 
                                    'regla' => '{campo}.sizeof > {6000}' , 
                                    'mensaje_invalido' => 'El peso náximo debe ser de {6000} Kb', 'estado' => '1'  
                                   ]);

    }
}
