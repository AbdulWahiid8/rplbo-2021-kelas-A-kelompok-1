<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratFactory extends Factory
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
            'email' => $this->faker->safeEmail(),
            'nomor_surat' => $this->faker->postcode(),
            'nomor_telp' => $this->faker->phoneNumber(),
            'perihal' => $this->faker->sentence(),
            'date' => $this->faker->date(),
            'konfirmasi_surat' => '2021-12-02'
        ];
    }
}
