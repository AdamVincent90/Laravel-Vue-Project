<?php

namespace Database\Factories;

use App\Models\BookRental;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class BookRentalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookRental::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   

        $start_date = Carbon::instance($this->faker->dateTimeBetween('-1 months', '+1 months'));
        $end_date = (clone $start_date)->addDays(random_int(0, 7));

        return [
            'start_date' => $start_date,
            'end_date' => $end_date
        ];
    }
}
