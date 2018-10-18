<?php

namespace rccm;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'mame', 'short','body'
    ];
}
