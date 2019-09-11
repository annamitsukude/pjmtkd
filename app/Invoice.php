<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = ['create_date','payment_date','payment_num','method_pay','date_pay','staff','place_delivery'];

    public function customer() {
      return $this->belongsTo('App\Customer');
    }
}
