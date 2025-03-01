<?php

namespace Database\Seeders;

use App\Models\Unities;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitySeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unities::factory(5)->create();
    }
}
