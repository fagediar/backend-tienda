<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "motorola edge30",
            'description' => "movil motorola",
            'price' => "1800000",
        ]);
        DB::table('products')->insert([
            'name' => "nintendo swith",
            'description' => "consola nintendo",
            'price' => "1500000",
        ]);
        DB::table('products')->insert([
            'name' => "samsung s23",
            'description' => "movil sansung",
            'price' => "1800000",
        ]);
        DB::table('products')->insert([
            'name' => "motorola edge31",
            'description' => "movil motorola",
            'price' => "1900000",
        ]);
    }
}
