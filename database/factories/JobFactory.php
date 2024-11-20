<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => $this->faker->jobTitle,
            'salary' => $this->faker->numberBetween($min = 1000, $max = 9000),
            'location' => $this->faker->randomElement(['Remote', 'Local']),
            'schedule' => $this->faker->randomElement(['Full time', 'Part time']),
            'url' => $this->faker->url(),
            'featured' => $this->faker->randomElement([true, false]),

        ];
    }
}
