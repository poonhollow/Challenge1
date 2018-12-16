<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function bill(){
      return $this->belongsTo(Bill::class);
    }
    public function cart(){
      return $this->hasMany(Cart::class);
    }
}
