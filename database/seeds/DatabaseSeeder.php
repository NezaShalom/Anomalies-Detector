<?php

use App\User;
use App\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        // $this->call('RolesSeeder');
        $this->call('Serviceseeder');
    }
}
