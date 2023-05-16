<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(), //fake()->jobTitle()
            'tags' => 'laravel,vue,backend', //fake()->jobTitle()
            'company' => $this->faker->company(), //fake()->jobTitle()
            'location' => $this->faker->address(), //fake()->jobTitle()
            'email' => $this->faker->companyEmail(), //fake()->jobTitle()
            'website' => $this->faker->url(), //fake()->jobTitle()
            'description' => $this->faker->paragraph(5)
        ];
    }
}
