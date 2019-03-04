<?php

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
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'administrator@administrator.com',
            'password' => bcrypt('udg123'),
            'is_active' => 1,
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
