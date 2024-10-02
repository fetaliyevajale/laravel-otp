<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Modelin doldurulacaq sahələri
    protected $fillable = [
        'title',
        'content',
    ];
}
