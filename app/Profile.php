<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'photo',
        'address',
        'location',
        'contact_no',
        'sex',
        'bio',
    ];

    public function user()
    {
    return $this->belongsTo('App\User');
    }

    protected $directory = "/images/";

    public function getPhotoAttribute($value){

        return url($this->directory . $value);

    }
}
