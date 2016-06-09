<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makale extends Model
{
    protected $table = 'makaleler';

    protected $fillable = ['title','icerik','slug'];

}
