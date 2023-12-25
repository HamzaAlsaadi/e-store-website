<?php

namespace Database\Seeders;

use App\Models\Pivot_Prodcut_Order;
use App\Models\Pivot_Product_Order;
use App\Models\PivotProdcutOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PivotProdcutOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PivotProdcutOrder::factory()->count(20)->create();
    }
}
