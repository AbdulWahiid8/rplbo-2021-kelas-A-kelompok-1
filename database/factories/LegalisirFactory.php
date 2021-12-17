<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LegalisirFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nis' => $this->faker->unique()->randomDigitNotNull(),
            'email' => $this->faker->safeEmail(),
            'nomor_telp' => $this->faker->phoneNumber(),
            'perihal' => $this->faker->sentence(),
            'date' => $this->faker->date()
        ];
    }
}
