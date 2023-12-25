<?php

namespace Database\Seeders;

use App\Models\Address_of_user;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class address_user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address_of_user::factory()->user(User::factory()->count(10))->count(20)->create();
    }
}
