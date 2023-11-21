<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->Sentence(mt_rand(1,3)),
            'author'=> fake()->name(mt_rand(2,3)),
            'excerpt' => fake()->sentence(mt_rand(5,8)),
            'description' => fake()->paragraph(mt_rand(3,5))
        ];
    }
}
