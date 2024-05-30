<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showCustomer(){
        return view('customerRegistration');
    }


    public function storeCustomer(Request $request){
        $customer = new Customer;

        $customer->id = $request->input('id');
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->custAddress = $request->input('custAddress');
        $customer->save();


    }
}
