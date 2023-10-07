<?php

namespace Database\Factories;


use App\Models\Question;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $question_id = Question::pluck('id')->toArray();
        return [
            'resposta' => $this->faker->boolean,
            'question_id' => $this->faker->randomElement($question_id),


        ];
    }
}
