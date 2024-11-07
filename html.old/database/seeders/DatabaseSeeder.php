<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Blue Team',
            'email' => 'blue@ventosa.energia',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Red Team',
            'email' => 'red@ventosa.energia',
            'password' => '$2y$12$W5uOYu08FPbWtfxOd09DjOoyCAykAYFeOI5mJ4z3ykquFvwuDtCC2',
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Green Team 01',
            'email' => 'green01@ventosa.energia',
            'password' => Hash::make('password01'),
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Green Team 02',
            'email' => 'green02@ventosa.energia',
            'password' => Hash::make('password02'),
            'is_admin' => false,
        ]);
    }
}
