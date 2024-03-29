<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = ['customer_id','create_date','payment_date','payment_num','method_pay','date_pay','staff','place_delivery'];

    public function customer() {
      return $this->belongsTo('App\Customer');
    }

    public function invoice_items() {
      return $this->hasMany('App\InvoiceItem');
    }
}
