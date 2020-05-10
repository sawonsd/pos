<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
    	'name','surname','email','phone','address','image','class','roll'
    ];
}
