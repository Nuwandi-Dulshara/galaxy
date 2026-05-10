<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'Admin',
            'username' => 'admin',
            'email'    => 'admin@galaxy.com',
            'password' => bcrypt('password'),  // change on first login
            'is_admin' => true,
        ]);
    }
}