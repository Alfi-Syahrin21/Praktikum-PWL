<?php

namespace Database\Factories;

use App\Models\Dosen2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class dosen2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Dosen2::class;
    public function definition(): array
    {
        return 
        [
            'nama' => $this->faker->name(),
            'nip' => $this->faker->unique->numerify('#########'),
            'email' => $this->faker->unique->safeEmail(),
            'alamat' => $this->faker->streetAddress(),
            'jurusan' => $this->faker->randomElement(['Teknologi Informasi' , 'Ilmu Komputer' , 'Teknik kimia' , 
                                                        'Teknik Mesin' , 'Farmasi' , 'Teknik Industri' , 
                                                        'Kedokteran' , 'Hukum' , 'Pendidikan Matematika' , 'Ekonomi' , 'Manajemen']),
            'no_hp' => $this->faker->phoneNumber()
        ];
    }
}
