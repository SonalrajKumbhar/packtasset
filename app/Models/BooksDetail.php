<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooksDetail extends Model
{
    use HasFactory;
    protected $fillable = ['title','author','isbn', 'genre', 'description', 'publication_date', 'image', 'publisher'];
}

