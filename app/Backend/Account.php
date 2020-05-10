<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
    	'name','balance','description'
    ];
}
