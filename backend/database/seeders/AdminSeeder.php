<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Boyet',
            'last_name' => 'Dedal',
            'middle_name' => 'Abordo',
            'email' => 'boyet@gmail.com',
            'password' => bcrypt('boyet123'), // Use bcrypt for password hashing
        ]);
    }
}
