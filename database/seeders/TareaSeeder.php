<?php

namespace Database\Seeders;
use App\Models\Tarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarea::create(['nombre'=>'Instalación']);
        Tarea::create(['nombre'=>'Service']);
        Tarea::create(['nombre'=>'Reconexión']);
        Tarea::create(['nombre'=>'Desconexión']);
    }
}
