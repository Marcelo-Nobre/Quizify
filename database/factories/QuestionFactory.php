<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quiz_id = Quiz::pluck('id')->toArray();
        return [
            'pergunta'=> $this->faker->sentence(),
            'description'=> $this->faker->sentence(),
            'optional'=> $this->faker->boolean(),
            'quiz_id' => $this->faker->randomElement($quiz_id),
        ];
    }
}
