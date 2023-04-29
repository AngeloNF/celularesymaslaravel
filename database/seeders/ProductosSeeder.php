<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'id'=>'1',
            'name' => '7Step Q1 4g',
            'precio' => 24500.00,
            'imagenURL'=>'Imagenes Celulares/celulares/Celular 7Step Q1 4g.jpg',
            'categoria_id'=>1,
        ]);
        DB::table('productos')->insert([
            'id'=>'2',
            'name' => 'Adulto Mayor 7Step Q4',
            'precio' => 30000.00,
            'imagenURL'=>'Imagenes Celulares/celulares/Celular Adulto Mayor 7Step Q4.jpg',
            'categoria_id'=>1,
        ]);
        DB::table('productos')->insert([
            'id'=>'3',
            'name' => 'Blu J0901 JOY 3G',
            'precio' => 37000.00,
            'imagenURL'=>'Imagenes Celulares/celulares/Celular Blu J0901 JOY 3G.jpeg',
            'categoria_id'=>1,
        ]);
       
        DB::table('productos')->insert([
            'id'=>'4',
            'name' => 'Blu X10 32GB',
            'precio' => 55000.00,
            'imagenURL'=>'Imagenes Celulares/celulares/Celular Blu X10 32GB.jpg',
            'categoria_id'=>1,
        ]);
        DB::table('productos')->insert([
            'id'=>'5',
            'name' => 'Blu Z4',
            'precio' => 21000.00,
            'imagenURL'=>'Imagenes Celulares/celulares/Celular Blu Z4.jpg',
            'categoria_id'=>1,
        ]);
    }
}
