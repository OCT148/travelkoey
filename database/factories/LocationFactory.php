<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Location::class;

    public function definition()
    {

        return [
            'image'=> 'testing.jpg',
            'title' => $this->faker->sentence(),
            'category' => $this->faker->randomElement(['alam', 'kerajinan', 'pendidikan', 'religi', 'sejarah']),
            'description' => $this->faker->text(),
            'body' => $this->faker->paragraph(),
        ];
    }
}
