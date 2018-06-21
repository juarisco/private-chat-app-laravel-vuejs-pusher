<?php

use App\User;
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
        // $this->call(UsersTableSeeder::class);
        factory(User::class)->create(
        [
        	'email' => 'josef@mail.com',
        	'name' => 'Josef'
        ]);
        factory(User::class)->create(
        [
        	'email' => 'bitfumes@mail.com',
        	'name' => 'Bitfumes'
        ]);
        factory(User::class)->create(
        [
        	'email' => 'ankur@mail.com',
        	'name' => 'Ankur'
        ]);
    }
}
