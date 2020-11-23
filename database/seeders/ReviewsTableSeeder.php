<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Review;
use Carbon\Factory;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::all()->each(function(Book $book) {
            $reviews = Review::factory(random_int(3, 8))->make();
            $book->review()->saveMany($reviews);
        });
    }
}
