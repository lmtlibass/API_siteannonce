<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'titre'         => $this->faker->sentence,
            'description'   => $this->faker->sentence,
            'image'         => $this->faker->imageUrl(),
            'validite'      => $this->faker->date,
            'region'        => $this->faker->sentence,
        ];
    }
}
