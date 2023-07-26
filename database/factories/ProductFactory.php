<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $CateogyList = ['a', 'b', 'c', 'd'];
        return [
            'name' => $this->faker->unique()->word,
            'category' => $CateogyList[array_rand($CateogyList)],
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'description' => $this->faker->sentence(),
            // Add more attributes as needed for your products
        ];
    }
}
