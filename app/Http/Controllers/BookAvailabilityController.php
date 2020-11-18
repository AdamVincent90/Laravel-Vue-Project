<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookAvailabilityController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return $data = $request->validate(
            [
                "start_date" => "required|date_format:Y-m-d|after_or_equal:today",
                "end_date" => "required|date_format:Y-m-d|after:start_date"
            ]
            );
    }
}
