<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

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
            "author"=>$this->faker->name(),
            "description"=>$this->faker->realText(),
            "photo"=>$this->faker->imageUrl()
        ];
    }
}
