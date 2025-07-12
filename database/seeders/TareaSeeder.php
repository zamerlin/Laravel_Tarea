<?php

namespace Database\Seeders;
use App\Models\Tarea;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    public function run()
    {
        Tarea::create(['nombre'=>'Instalación']);
        Tarea::create(['nombre'=>'Service']);
        Tarea::create(['nombre'=>'Reconexión']);
        Tarea::create(['nombre'=>'Desconexión']);
    }
}
