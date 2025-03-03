<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model {
    protected $table = 'articles';

    // Relasi dengan model User (author)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    // Relasi dengan model Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
