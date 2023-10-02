<?php

namespace Database\Seeders;

use Database\Factories\QuizFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Quiz::factory()->count(10)->create();
    }
}
