<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomersController extends Controller
{
    public function helloWorld(){
        return view('home');
    }

    public function list(){
        $customers = Customer::all();

        // dd($customers);
    
        return view('customer.customer', ['customerss' => $customers]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'alamat' => 'required',
        ]);

        $customer = new Customer();
        $customer->name=request('name');
        $customer->alamat=request('alamat');
        $customer->save();

        return back();
    }

}
