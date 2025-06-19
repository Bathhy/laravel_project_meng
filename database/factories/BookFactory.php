<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Author;
use App\Models\Category;
use App\Models\Publisher;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
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
           'title'=>fake()->sentence(3),
           'author_id'=>Author::inRandomOrder()->first()->id,
           'publisher_id'=>Publisher::inRandomOrder()->first()->id,
            'edition'=>fake()->randomNumber(1,10),
            'quantity'=>fake()->randomNumber(1,10),
            'category_id'=>Category::inRandomOrder()->first()->id,


        ];
    }
}
