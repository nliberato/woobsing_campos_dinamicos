<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
//use App\Models\Rol;
//use App\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(15)->create();
        
       
        $userAdmin = User::create(['name'            => 'Admin',
                                     
                                    'email'           => 'admin@woobsingtest.com', 
                                    
                                    'password'        => Hash::make('password'),
                                    'remember_token'  => 'password',
                                    ]);
      
        // Llama los demas seeder 
        $this->call([
            CamposSeeder::class,
            ValidacionesSeeder::class,
            CampoValidacionSeeder::class,
            TipoValidacionSeeder::class,
            OfertaSeeder::class
        ]);

    }
}
