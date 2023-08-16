<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Ticket;
use App\Models\Warehouse;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(5)->create();

        Department::factory()->times(5)->create();
        
        Warehouse::factory()->times(5)->create();

        Ticket::factory()->times(20)->create();
    }
}
