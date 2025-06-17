<?php

namespace Database\Seeders;
use App\Models\EmployeeComplete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeCompleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         EmployeeComplete::factory(10)->create();
    }
}
