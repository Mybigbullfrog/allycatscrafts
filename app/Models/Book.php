<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //protected $guarded = [];

    protected $fillable = [
        'title',
        'description',
        'price',
        'pages_count'
    ];

    public $timestamps = false;

    protected $dates = ['softDeletes'];
}
