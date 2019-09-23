<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Invoice;

class InvoicesController extends Controller
{
    public function store(Request $request, $id) {
      // $this->
      // validate
      // validate検証　メアド＠入ってない、数字が文字、必須のもの入ってない
      // ($request,[
      //
      // ]);
      $invoice = new Invoice ([
        'create_date' => $request->create_date,
        'payment_date' => $request->payment_date,
        'payment_num' => $request->payment_num,
        'method_pay' => $request->method_pay,
        'date_pay' => $request->date_pay,
        'staff' => $request->staff,
        'place_delivery' => $request->place_delivery
        ]);
      $customer = Customer::find($id);
      $customer->invoices()->save($invoice);
      return redirect()->action('InvoicesController@show',[$customer->id,$invoice->id] );
    }

    public function create($id) {
      $customer = Customer::find($id);
      return view('invoices.create')->with([
        "customer" => $customer
      ]);
    }

    public function show($id,$invoice_id) {
      $customer = Customer::find($id);
      $invoice = Invoice::find($invoice_id);
      return view('invoices.show')->with([
       "customer" => $customer,
       "invoice"  => $invoice,
      ]);
    }
}
