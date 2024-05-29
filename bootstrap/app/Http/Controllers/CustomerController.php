<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
public function add_customer(){
    return view('customer');
}

public function add_customer_data(Request $request){
    $customer=new customer;
    $customer->name = $request['name'];  
    $customer->email=$request['email'];
    $customer->phone=$request['phone'];
    $customer->address=$request['address'];
    $customer->dob=$request['dob'];

  
    $customer->save();
    
}
}