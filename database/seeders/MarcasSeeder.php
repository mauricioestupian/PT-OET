<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marcas')->insert(['nombre' => 'Kia',]);
        DB::table('marcas')->insert(['nombre' => 'Ford',]);
        DB::table('marcas')->insert(['nombre' => 'Mazda',]);
        DB::table('marcas')->insert(['nombre' => 'Renault',]);
        DB::table('marcas')->insert(['nombre' => 'Toyota',]);
        DB::table('marcas')->insert(['nombre' => 'Mercedes-Benz',]);
        DB::table('marcas')->insert(['nombre' => 'BMW',]);
        DB::table('marcas')->insert(['nombre' => 'Nissan',]);
        DB::table('marcas')->insert(['nombre' => 'Chevrolet',]);
        DB::table('marcas')->insert(['nombre' => 'Subaru',]);
    }
}
