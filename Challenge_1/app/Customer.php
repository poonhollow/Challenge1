<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function bill(){
      return $this->hasMany(Bill::class);
    }



}
