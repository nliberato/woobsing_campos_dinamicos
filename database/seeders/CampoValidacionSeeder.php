<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CampoValidacion;

class CampoValidacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CampoValidacion::create(['campo_id' => 1 , 'validacion_id' => '1']);     // 1
        CampoValidacion::create(['campo_id' => 1 , 'validacion_id' => '2']);     // 2
        CampoValidacion::create(['campo_id' => 1 , 'validacion_id' => '3']);     // 3
        CampoValidacion::create(['campo_id' => 5 , 'validacion_id' => '3']);     // 4
        CampoValidacion::create(['campo_id' => 8 , 'validacion_id' => '4']);     // 5
        CampoValidacion::create(['campo_id' => 9 , 'validacion_id' => '5']);     // 6
        CampoValidacion::create(['campo_id' => 6 , 'validacion_id' => '6']);     // 7
    }
}
