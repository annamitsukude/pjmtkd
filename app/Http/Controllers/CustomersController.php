<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function index() {
      // $customers = Customer::all();
      $customers = Customer::latest()->get();
      // dd($customers->toArray());
      return view('customers.index')->with('customers',$customers);
    }

    public function show($id) {
      $customer = Customer::find($id);
      return view('customers.show')->with('customer',$customer);
    }

    public function create() {
      return view('customers.create');
    }

    public function store(Request $request) {
      $customer = new Customer();
      $customer->company_name = $request->company_name;
      $customer->company_name_kana = $request->company_name_kana;
      $customer->division = $request->division;
      $customer->name = $request->name;
      $customer->name_furigana = $request->name_furigana;
      $customer->name_renmei = $request->name_renmei;
      $customer->payment_term = $request->payment_term;
      $customer->discount = $request->discount;
      $customer->address_main = $request->address_main;
      $customer->address_sub = $request->address_sub;
      $customer->phone_num = $request->phone_num;
      $customer->tel = $request->tel;
      $customer->mail = $request->mail;
      $customer->dm = $request->dm;
      $customer->route = $request->route;
      $customer->memo = $request->memo;
      $customer->save();
      return redirect('/');
    }

    public function edit($id) {
      $customer = Customer::find($id);
      return view('customers.edit')->with('customer',$customer);
    }
}
