<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_admin' => 1,
            'email_verified_at' => now(),
            'password' => '$2y$10$suozdUihaGLvnkkuLTroQeY3aN8YgtyKbf.obwff2a84b0ekUY6gC',
            'remember_token' => Str::random(10),
        ]);
    }
}
