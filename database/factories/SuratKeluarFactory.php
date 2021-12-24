<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratKeluarFactory extends Factory
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
            'nomor_surat' => $this->faker->postcode(),
            'tujuan' => $this->faker->address(),
            'perihal' => $this->faker->sentence(),
            'date' => $this->faker->date(),
        ];
    }
}
