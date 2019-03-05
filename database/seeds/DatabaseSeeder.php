<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'administrator@administrator.com';
        $user->student_code = 123456789;
        $user->password = bcrypt('udg123');
        $user->email_verify_at = '2019-03-05 06:01:06';
        $user->is_social_service = 1;
        $user->role = 'admin';
        $user->save();
    }
}
