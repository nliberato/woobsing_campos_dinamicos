<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Oferta;

class OfertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Oferta::create([
        'titulo' => 'Ing Prueba ',
        'slug' => 'belleza-g2hi9wnecq',
        'descripcion_corta' => 'Personal conocimiento en belleza: uñas, corte y cepillado, trenzas y peinados, maquillaje, colorimetria',
        'description' => 'Personal conocimiento en una o varias areas de la belleza. buena fluidez verbal. capacidad de hablar en publico. ',
        'experiencia' => 'sin Experiencia',
        'idioma' => 'Espanol',
        'escolaridad' => 'Bachiller',
        'pais' => 'colombia',
        'departamento' =>'nul',
        'ciudad' => 'Bucaramanga',
        'salario' => 'A convenir',
        'fecha_contratacion' => '2017-01-22',
        'tipo_contrato' => 'Medio tiempo',
        'categoria' => 'Belleza',
        'duracion' => '2017-12-16',
        'fecha_inicio' => '2017-01-19',
        'fecha_fin' => '2017-12-16',
        'activa' =>'1',
        'imagen' => 'banner.jpg',
        'dominio' => 'buentrabajo.com',
        'formulario' => '1',
        'empresa_id' =>'1']);
    }
}
