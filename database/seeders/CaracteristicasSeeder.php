<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaracteristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('caracteristicas')->insert([
            'descripcion' =>"Bateria 1000mAH",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Camara 0.3MP",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Memoria 48M + 128mb",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Bluetooth",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "SIM 4G",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Radio Fm",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Linterna",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Alarma",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Calculadora",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Cargador Tipo-C",
            "producto_id"=>"1",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Bateria 1200mAH",
            "producto_id"=>"2",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Camara 2MP",
            "producto_id"=>"2",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Memoria 48M + 128mb",
            "producto_id"=>"2",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "SIM 4G",
            "producto_id"=>"2",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Bluetooth",
            "producto_id"=>"2",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Radio Fm",
            "producto_id"=>"2",
        ]);
        DB::table('caracteristicas')->insert([
            'descripcion' => "Linterna",
            "producto_id"=>"2",
        ]);
        
        
        
        
        
        
        
        
    }
}
