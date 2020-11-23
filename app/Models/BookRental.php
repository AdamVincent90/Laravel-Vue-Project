<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
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

    public function review() {
        return $this->hasOne(Review::class);
    }

    public function scopeBetweenDates(Builder $query, $start_date, $end_date) {
        return $query->where('end_date', '>=', $start_date)->where('start_date', '<=', $end_date);
    }
}


