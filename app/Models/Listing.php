<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'title',
        'company',
        'location',
        'salary',
        'email',
        'type',
        'description',
    ];
}
