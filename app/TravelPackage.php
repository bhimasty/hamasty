<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    protected $fillable = [
        'title', 'slug', 'location', 'about', 'featured_event', 'food', 'language', 'departure', 'duration', 'type', 'price'
    ];

    protected $hidden = [];

    use SoftDeletes;
}
