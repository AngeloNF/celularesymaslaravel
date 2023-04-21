<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'id' => 1,
            'name' => "Celulares"
        ]);
        DB::table('categorias')->insert([
            'id' => 2,
            'name' => "Accesorios"
        ]);
        DB::table('categorias')->insert([
            'id' => 3,
            'name' => "Sublimacion"
        ]);
    }
}
