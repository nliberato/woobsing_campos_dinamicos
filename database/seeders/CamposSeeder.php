<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campos;

class CamposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campos::create(['nombre' => 'Texto corto' , 'tipo' => 'text'          , 'descripcion' => 'texto corto'               , 'estado' => 1 ]);  
        Campos::create(['nombre' => 'Lista'       , 'tipo' => 'select'        , 'descripcion' => 'Lista desplegable'         , 'estado' => 1 ]);
        Campos::create(['nombre' => 'Radio'       , 'tipo' => 'radio'         , 'descripcion' => 'Seleccion unica'           , 'estado' => 1 ]);
        Campos::create(['nombre' => 'Caja'        , 'tipo' => 'checkbox'      , 'descripcion' => 'Seleccion multiple'        , 'estado' => 1 ]);
        Campos::create(['nombre' => 'Texto Largo' , 'tipo' => 'textarea'      , 'descripcion' => 'Texto largo'               , 'estado' => 1 ]);
        Campos::create(['nombre' => 'Archivo'     , 'tipo' => 'file'          , 'descripcion' => 'Adjuntar archivo'          , 'estado' => 1 ]);  
        Campos::create(['nombre' => 'Foto'        , 'tipo' => 'img'           , 'descripcion' => 'Camara'                    , 'estado' => 1 ]);
        Campos::create(['nombre' => 'Fecha'       , 'tipo' => 'date'          , 'descripcion' => 'fecha AAAA-MM-DD'          , 'estado' => 1 ]);
        Campos::create(['nombre' => 'Fecha y hora', 'tipo' => 'Datetime-local', 'descripcion' => 'fecha AAAA-MM-DD HH:II-SS' , 'estado' => 1 ]);
        Campos::create(['nombre' => 'Url'         , 'tipo' => 'text'          , 'descripcion' => 'Texto URL'                 , 'estado' => 1 ]);
    }
}
