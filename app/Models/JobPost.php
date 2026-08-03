<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'platforms', 'is_active'];

    protected $casts = [
        'platforms' => 'array',
    ];
}