<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Validaciones;

class ValidacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Validaciones::create(['nombre' => 'Texto'       , 'estado' => 1 ]);  
        Validaciones::create(['nombre' => 'Numero'      , 'estado' => 1 ]);
        Validaciones::create(['nombre' => 'Longitud'    , 'estado' => 1 ]);
        Validaciones::create(['nombre' => 'Fecha'       , 'estado' => 1 ]);
        Validaciones::create(['nombre' => 'Fecha y hora', 'estado' => 1 ]);
        Validaciones::create(['nombre' => 'Peso'        , 'estado' => 1 ]);   
    }
}
