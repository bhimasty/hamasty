<?php

use App\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@hamasty.com',
                'password' => bcrypt('1234567890'),
            ],
            [
                'name' => 'User',
                'email' => 'user@hamasty.com',
                'password' => bcrypt('1234567890'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
