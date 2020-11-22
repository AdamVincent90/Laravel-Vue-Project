<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_title',
        'author',
        'release_date',
        'price'
    ];

    public function book_rentals() {
        return $this->hasMany(BookRental::class);
    }

    public function bookAvailability($start_date, $end_date): bool
    {
        // Get all book rentals where book id = $id with scope function that detects overlap from user input, and counts
        return 0 === $this->book_rentals()->betweenDates($start_date, $end_date)->count();
    }
}
