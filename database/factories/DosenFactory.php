<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Dosen::class;
    public function definition(): array
    {
        return [
            'id_dosen' => $this->faker->numerify('##########'),
            'nama' => $this->faker->name(),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Teknologi Informasi', 'Ilmu Komputer', 'Teknik Elektro', 'Teknik Mesin']),
            'alamat' =>$this->faker->address(),
        ];
    }
}
