<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'check_in_time',
        'check_out_time',
        'offer',
        'per_night_charge',
        'policy_text',
        'rating',
        'facilities',
        'map',
    ];

    protected $directory = "/images/hotel/";

    public function getImageAttribute($value){

        return url($this->directory . $value);

    }
}
