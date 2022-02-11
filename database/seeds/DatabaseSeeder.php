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
        $this->call(UsersTableSeeder::class);
        User::factory(50)->create();
        Service::factory(20)->create();
    }
}
