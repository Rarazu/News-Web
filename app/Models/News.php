<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $primaryKey = 'id_artikel';

    protected $fillable = [
        'title',
        'content',
        'imagePath',
        'status',
        'id_category',
        'id_user'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user');
    }
}

