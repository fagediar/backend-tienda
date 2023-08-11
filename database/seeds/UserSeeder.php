<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "jheyson",
            'last_name' => "herrera",
            'address' => "parquea de bolivar",
            'city' => "santamarta",
        ]);
        DB::table('products')->insert([
            'name' => "adalberto",
            'last_name' => "rojas",
            'address' => "cidadela",
            'city' => "santamarta",
        ]);
        DB::table('products')->insert([
            'name' => "marcelino",
            'last_name' => "perez",
            'address' => "parque",
            'city' => "santamarta",
        ]);
        DB::table('products')->insert([
            'name' => "yelitza",
            'last_name' => "ruda",
            'address' => "villa bella",
            'city' => "santamarta",
        ]);
    }
}
