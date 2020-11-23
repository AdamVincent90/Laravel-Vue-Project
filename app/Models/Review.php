<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'date',
        'rating',
        'content',
        'name'
    ];

    // Overrides auto increment on this models UUID primary key
    public function getIncrementing()
    {
        return false;
    }

    // Return primary key type as a string instead of default data type int
    public function getKeyType()
    {
        return 'string';
    }

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public function book_rental() {
        return $this->belongsTo(BookRental::class);
    }
}
