<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'customer'
        ]);
        DB::table('roles')->insert([
            'name' => 'employee'
        ]);
        DB::table('roles')->insert([
            'name' => 'modifier'
        ]);
    }
}
