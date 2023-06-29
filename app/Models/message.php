<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'telegram',
        'twitter',
        'website',
        'ama_date',
        'price',
        'message',
    ];
}
