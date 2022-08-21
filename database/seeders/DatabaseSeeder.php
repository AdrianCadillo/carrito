<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Productos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Productos::create([
           'descripcion'=>'Coca Cola de 3 litros',
           'precio'=>9.80,
           'stock'=>12 
        ]);

        Productos::create([
            'descripcion'=>'Inka kola de 2 litros',
            'precio'=>5.80,
            'stock'=>34 
         ]);

         Productos::create([
            'descripcion'=>'LAPTOP HP DE 4 GB DE RAM',
            'precio'=>2300,
            'stock'=>9
         ]);
    }
}
