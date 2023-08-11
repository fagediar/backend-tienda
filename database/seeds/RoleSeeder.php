<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "super administrador"
        ]);
        DB::table('products')->insert([
            'name' => "administrador"
        ]);
        DB::table('products')->insert([
            'name' => "cliente"
        ]);
    }
}
