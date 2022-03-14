<?php

use App\Role;
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
        $role_id = Role::where('name', '=', 'admin')->value('id');
        DB::table('users')->insert([
            [
                'role_id' => $role_id,
                'name' => 'Shalom Igiraneza',
                'national_id' => '1120013450009325',
                'password' => Hash::make('11111'),
                'phone' => '0732916444',
                'status' => 'active'
            ],

            [
                'role_id' => $role_id,
                'name' => 'Eric Nshuit',
                'national_id' => '1120013450009321',
                'password' => Hash::make('11111'),
                'phone' => '0732916442',
                'status' => 'active'
            ],

        ]);
    }
}
