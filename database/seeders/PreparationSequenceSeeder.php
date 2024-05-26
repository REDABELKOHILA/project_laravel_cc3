<?php

namespace Database\Seeders;

use App\Models\PreparationSequence;
use Illuminate\Database\Seeder;

class PreparationSequenceSeeder extends Seeder
{
    public function run()
    {
        PreparationSequence::factory()->count(20)->create();
    }
}
