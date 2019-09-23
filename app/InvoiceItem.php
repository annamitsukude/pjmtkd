<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    //
    protected $fillable = ['invoice_id','item_num','item_name','spec','number','unit_price'];

    public function invoice() {
      return $this->belongsTo('App\Invoice');
    }
}
