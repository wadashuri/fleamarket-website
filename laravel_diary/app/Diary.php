<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    public $fillable = ['title', 'log'];
}
