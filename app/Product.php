<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    protected $table = 'abcs'
//    protected $fillable = ['name', 'price', 'description'];
    protected $guarded = ['_token', 'submit'];
}
