<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user;

class CreateUserSeeder extends Seeder
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
                'email' => 'admin@dwiprasetyo.com',
                'admin' => '1',
                'superadmin' => '0',
                'user' => '0',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'User',
                'email' => 'user@dwiprasetyo.com',
                'admin' => '0',
                'superadmin' => '0',
                'user' => '1',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Super Admin',
                'email' => 'petugas@dwiprasetyo.com',
                'admin' => '0',
                'superadmin' => '1',
                'user' => '0',
                'password' => bcrypt('12345678'),
            ],

        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
