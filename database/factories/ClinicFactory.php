<?php

namespace Database\Factories;

use App\Models\Clinic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clinic>
 */
class ClinicFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Clinic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'clinicID' => $this->faker->uuid(),
            'clinicName' => $this->faker->company(),
            'clinicAddress' => $this->faker->address()
        ];
    }
}
