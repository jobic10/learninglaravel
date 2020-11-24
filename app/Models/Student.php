<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function phone()
    {
        return $this->hasOne('App\Models\Phone');
    }

    public function getEmailAttribute($value)
    {
        return ucfirst($value);
    }

    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] =  strtolower($value);
    }
}