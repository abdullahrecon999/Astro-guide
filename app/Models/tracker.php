<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'sat_id', 'rating', 'sat_name'
    ];
}
