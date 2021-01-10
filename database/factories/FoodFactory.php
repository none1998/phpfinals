<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'expiration_day' => $this->faker->randomDigit,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomDigit,
            'image' => $this->faker->url,
            'user_id' => self::factoryForModel(User::class)
        ];
    }
}
