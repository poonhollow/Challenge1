<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public function invoice(){
    return $this->belongsTo(Invoice::class);
  }

  public function product(){
    return $this->belongsTo(Product::class);
  }
}
