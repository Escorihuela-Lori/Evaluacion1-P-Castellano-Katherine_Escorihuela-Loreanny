<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Propiedad;

class PropiedadSeeder extends Seeder
{
    public function run(): void{
        $propiedad1 = Propiedad::create([
            'direccion' => 'Calle 123',
            'MetrosCuadrados' => 120.50,
            'habitaciones' => 3,
            'disponible' => true,
        ]);
        
        $propiedad2 = Propiedad::create([
            'direccion' => 'Avenida 456',
            'MetrosCuadrados' => 150.25,
            'habitaciones' => 4,
            'disponible' => false,
        ]);

        $propiedad3 = Propiedad::create([
            'direccion' => 'Carrera 789',
            'MetrosCuadrados' => 180.75,
            'habitaciones' => 5,
            'disponible' => false,
        ]);
    }
}
