<?php

namespace rccm;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'name', 'description'
    ];
}
