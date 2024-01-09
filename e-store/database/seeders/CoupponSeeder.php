<?php

namespace Database\Seeders;

use App\Models\Couppon;
use Database\Factories\CoupponFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoupponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Couppon::factory()->count(5)->create();
    }
}
