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
                'national_id' => '4262772',
                'email' => 'Shaw@gmail.com',
                'password' => Hash::make('11111'),
                'mobile_number' => '0788908183',
                'role' => 'admin',
                'status' => 'inactive',
                'age' => '2002-01-01',
                'marriage' => 'married',
            ],

            [
                'age' => '2002-01-01',
                'national_id' => '42627725',
                'email' => 'Shap@gmail.com',
                'mobile_number' => '0788908182',
                'name' => 'Shap',
                'password' => Hash::make('11111'),
                'role' => 'customer',
                'status' => 'inactive',
                'marriage' => 'not_married',
            ],


        ]);
    }
}
