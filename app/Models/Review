<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rating', 'comment'
    ];

    /**
     * Get the book that owns the review.
     */
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
