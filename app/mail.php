<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mail extends Model
{
    public $fillable = ['name','email','subject','message','replied'];
}
