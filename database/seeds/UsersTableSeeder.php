<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Shaw',
                'email' => 'Shaw@gmail.com',
                'password' => Hash::make('11111'),
                'mobile_number' => '0788908183',
                'role' => 'admin',
                'status' => 'inactive',
                'age' => '29',
                'marriage' => 'married',
            ],

            [
                'age' => '19',
                'email' => 'Shap@gmail.com',
                'mobile_number' => '0788908182',
                'name' => 'Shap',
                'password' => Hash::make('11111'),
                'role' => 'customer',
                'status' => 'inactive',
                'marriage' => 'not_married',
            ],

            // [
            //     'name' => 'Shas',
            //     'email' => 'Shas@gmail.com',
            //     'password' => Hash::make('11111'),
            //     'mobile_number' => '0788908181',
            //     'role' => 'customer',
            //     'status' => 'inactive',
            //     'life' => 'not_alive',
            //     'marriage' => 'not_married',
            //     'age' => '19',
            // ],

            // [
            //     'name' => 'Shaa',
            //     'email' => 'Shaa@gmail.com',
            //     'password' => Hash::make('11111'),
            //     'mobile_number' => '0788908180',
            //     'role' => 'employee',
            //     'status' => 'active',
            //     'life' => 'alive',
            //     'marriage' => 'not_married',
            //     'age' => '19',
            //     'department_id' => '1',
            // ],
        ]);
    }
}
