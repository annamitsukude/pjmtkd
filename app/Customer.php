<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['company_name','company_name_kana','division','name','name_furigana','name_renmei','payment_term','discount','address_main','address_sub','phone_num','tel','mail','dm','route','memo'];

    public function invoices() {
      return $this->hasMany('App\Invoice');
    }
}
