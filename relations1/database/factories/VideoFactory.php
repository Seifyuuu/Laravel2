<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "url"=>$this->faker->imageUrl(),
            "img"=>$this->faker->imageUrl(),
            "duration"=>$this->faker->numberBetween(0, 1000) . "s",
            "titre"=>$this->faker->city(),
            "description"=>$this->faker->text() 
        ];
    }
}
