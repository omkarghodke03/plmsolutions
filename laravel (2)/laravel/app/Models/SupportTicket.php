<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
    use HasFactory;

    // ADD THIS ARRAY INSIDE THE CLASS
    protected $fillable = [
        'customer_name',
        'customer_email',
        'subject',
        'message',
    ];
}