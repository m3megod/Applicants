<?php

namespace Database\Factories;

use App\Models\Applicants;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Applicants::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'experience_years' => $this->faker->numberBetween(0, 70),
            'is_hired' => $this->faker->boolean(),
        ];
    }
}
