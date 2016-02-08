<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
         DB::table('users')->insert([
            'name' => 'system',
            'email' => 'system@levelup.app',
            'password' => bcrypt('system'),
        ]);
    }
}
