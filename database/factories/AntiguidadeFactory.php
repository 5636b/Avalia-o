<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Antiguidade>
 */
class AntiguidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->ean13(),
            'marca' => $this->faker->unique()->word(),
            'Fbano' => $this->faker->dateTime(),
            'preco' => $this->faker->randomFloat(2)
        ];
    }
}
