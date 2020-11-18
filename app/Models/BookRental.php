<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookRental extends Model
{
    use HasFactory;

    protected $fillable = [
        "start_date",
        "end_date",
    ];

    public function book() {
        return $this->belongsTo(Book::class);
    }
}


