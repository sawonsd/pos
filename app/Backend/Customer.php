<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    	'name','phone','email','date','previous','village','post','upzila','zila','nid','image'
    ];
}










