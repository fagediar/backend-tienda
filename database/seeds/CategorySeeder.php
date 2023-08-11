<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => "juego"
        ]);
        DB::table('products')->insert([
            'name' => "celular"
        ]);
        DB::table('products')->insert([
            'name' => "portatil"
        ]);
    }
}
