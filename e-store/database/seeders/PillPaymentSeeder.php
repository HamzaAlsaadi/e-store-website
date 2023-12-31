<?php

namespace Database\Seeders;

use App\Models\pillPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PillPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        pillPayment::factory()->count(50)->create();
    }
}
