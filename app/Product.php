<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Product extends Model
{
    public function reviews() {
      return $this->hasMany(Review::class);
    }
}
