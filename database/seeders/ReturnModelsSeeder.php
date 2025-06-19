<?php

namespace Database\Seeders;

use App\Models\ReturnModels;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReturnModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReturnModels::factory()->count(5)->create();
    }
}
