<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Http\Resources\ReviewIndexResource;

class ReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id, Request $request)
    {
        $book = Book::findOrFail($id);

        return ReviewIndexResource::collection($book->review()->latest()->get());

    }
}
