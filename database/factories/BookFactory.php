<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_title' => $this->faker->words(3, true),
            'author' => $this->faker->name,
            'release_date' => $this->faker->date(),
            'price' => $this->faker->numberBetween(10, 99) + ".99"
        ];
    }
}
