<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'price' => fake()->randomDigit(),
            'description' => fake()->text(rand(70,100)),
            'cover' => fake()->imageUrl(300,300,'OMG',true),
            'current_stock'=>fake()->randomDigit(),
           

        ];
    }
}
