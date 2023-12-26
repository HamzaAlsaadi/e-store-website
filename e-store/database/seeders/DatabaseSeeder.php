<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Database\Factories\catgoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            Userseeder::class,
            OrderSeeder::class,
            company::class,
            CatgorySeeder::class,
            AddressUserSeeder::class,
            Product::class,
            PivotOrderProductSeeder::class,
        ]);
        // address_user::class);
    }
}
