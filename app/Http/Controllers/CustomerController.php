<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gender;
use App\Customer;

class CustomerController extends Controller
{
    // //お客様プロフィール画面の表示
    // public function show(Request $request)
    // {
    //     $customer=customer::all();
    //     $customer=Customer::find($request->id);
    //     $params=['id' => $request->id, 'customer' => $customer];
    //     // dd($params);//ddします
    //     return view('customer/show',$params);
    // }

}
