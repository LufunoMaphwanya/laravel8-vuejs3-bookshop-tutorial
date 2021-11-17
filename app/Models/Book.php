<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subtitle', 'cover', 'summary'
    ];

    /**
     * Get the comments for the book.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get the genres for the book.
     */
    public function genres()
    {
        return $this->hasMany(Genre::class);
    }

    /**
     * Get the pages for the book.
     */
    public function pages()
    {
        return $this->hasMany(Page::class);
    }


}
