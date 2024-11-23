<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

class JobFactory extends Factory
{

     /* Define the models default state.

      @return array<string, mixed>
    */
    public function definition(): array
    {
        return [
            'title' => fake()->jobtitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$50,000 USD'
        ];
    }
}
