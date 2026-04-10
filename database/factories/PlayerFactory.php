<?php

namespace Database\Factories;

use App\Models\Coach;
use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'date_of_birth' => fake()->dateTimeBetween('-30 years', '-20 years')->format('Y-m-d'),
            'position' => fake()->randomElement(['CF', 'LW', 'RW', 'AM', 'CM', 'DM', 'CB', 'LB', 'RB', 'GK']),
            'market_value' => fake()->numberBetween(1000000, 200000000),
            'coach_id' => Coach::inRandomOrder()->first()->id,
        ];
    }
}
