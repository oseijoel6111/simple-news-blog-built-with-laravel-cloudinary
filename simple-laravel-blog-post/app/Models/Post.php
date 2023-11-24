<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;

class Post extends Model
{
    use HasFactory, MediaAlly;

    protected $guarded = [];

    protected $fillable = [
        'category',
        'title',
        'description',
        'image',
    ];
}
