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
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, javascript',
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'email' => $this->faker->companyemail(),
            'website' => $this->faker->url(),
            'description' => $this->faker->paragraph(5)
        ];
    }
}
