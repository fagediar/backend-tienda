<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'tipe' => "A",
        ]);
        DB::table('products')->insert([
            'type' => "B",
        ]);
        DB::table('products')->insert([
            'type' => "C",
        ]);
    }
}
