<?php

namespace Database\Factories;

use App\Models\collection;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<collection>
 */
class CollectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->word(),
            'user_id'=> 1
        ];
    }
}
