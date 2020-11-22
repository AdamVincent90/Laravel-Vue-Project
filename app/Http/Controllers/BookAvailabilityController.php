<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookAvailabilityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, Request $request)
    {   
        // Makes validation rules for user input date in /books/1
        // Takes start date and end date parms from axios get request and validates if the user input dates are entered
        // correct format and from todays date, the end date uses the start date as a paramater to declare the end date is after
        // the start date

         $data = $request->validate(
            [
                "start_date" => "required|date_format:Y-m-d|after_or_equal:today",
                "end_date" => "required|date_format:Y-m-d|after:start_date"
            ]
            );

            // SELECT * FROM books where books.id = $id
            $book = Book::findOrFail($id);

           return $book->bookAvailability($data['start_date'], $data['end_date'])
            ? response()->json([])
            : response()->json([], 404);
    }
}
