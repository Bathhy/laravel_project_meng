<?php

namespace Database\Factories;
use App\Models\Member;
use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'member_id'=>Member::inRandomOrder()->first()->id,
            'book_id'=>book::inRandomOrder()->first()->id,
            'borrow_date'=>fake()->date(),
            'due_date'=>fake()->date(),
        ];
    }
}
