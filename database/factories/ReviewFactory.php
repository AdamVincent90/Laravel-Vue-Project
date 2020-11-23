<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'name' => $this->faker->name,
            'content' => $this->faker->sentences(5, true),
            'date' => $this->faker->date(),
            'rating' => $this->faker->numberBetween(1, 5)
        ];
    }
}
