<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class youtube extends Model
{
    use HasFactory;

    protected $table = 'youtubes';

    protected $fillable = [
        'title',
        'description',
        'views',
        'likes'
    ];
}
