<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Hashemi Rafsa Alfatih',
                'username' => 'hashemi',
                'email' => 'semi@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Betha Buka Ghudang',
                'username' => 'betha',
                'email' => 'betha@example.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
