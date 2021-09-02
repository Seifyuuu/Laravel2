<?php

namespace Database\Factories;

use App\Models\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->city(),
            "date"=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            "author"=>$this->faker->firstName('male'|'female'),
            "profession"=>$this->faker->jobTitle(),
            "age"=>$this->faker->randomNumber($nbDigits = 2, $strict = false),
            "description"=>$this->faker->realText()
        ];
    }
}
