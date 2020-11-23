<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\BookRental;
use Illuminate\Database\Seeder;

class BookRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::all()->each(function(Book $book) {
            $book_rental = BookRental::factory()->make();
            $book_rentals = collect([$book_rental]);
            echo "<script>console.log(".$book.")</script>";
            for($i = 0; $i < random_int(1, 14); $i++)
            {
                $start_date = (clone $book_rental['end_date'])->addDays(random_int(1, 7));
                $end_date = (clone $start_date)->addDays(random_int(1, 7));

                $book_rental = BookRental::make([
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'book_id' => $book->book_id
                ]);

                $book_rentals->push($book_rental);
            }

            $book->book_rental()->saveMany($book_rentals);
        });
    }
}
