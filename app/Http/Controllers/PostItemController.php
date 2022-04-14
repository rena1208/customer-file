<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostItemRequest;

use App\Customer;
use App\PostItem;
use App\Item;
use App\Manufacturer;
use App\Category;
use App\PurchaseData;
use App\PurchasedItems;

use Validator;

class PostItemController extends Controller
{
    //
    // public function create()
    // {
    //     return view('customer/postItem');
    // }

    public function create($id)
    { 
      $customer = Customer::find($id);
      $customerGender = Customer::with('customerGender')->get();
      $items = Item::orderBy('name','asc')->get();
      $manufacturers = Manufacturer::all();
      $categories =  Category::all();
      // dd($categories);//dd
      return view('customer/postItem', compact('customer','items','manufacturers','categories'));
      
    }

// 購入商品投稿　登録ボタンを押したら

    public function store(PostItemRequest $request)
    {   
        // $validator = Validator::make($request->all(), [
        //     'purchased_item_id' => 'nullable',
        //     'item_id' => 'nullable',
        //     'quantity' => 'nullable',
        //     'date'  => 'required',
        //     'comment' => 'nullable',
        //     'sampl' => 'nullable',

        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()
        //     ->withInput()
        //     ->withErrors($validator);
        // }

        $purchasedItems = new PurchasedItems;
        // dd($request->item_id);
        $purchasedItems->item_id = $request->item_id;
        $purchasedItems->quantity = $request->quantity;
        $purchasedItems->save();
        $purchaseData = new PurchaseData;
        $purchaseData->customer_id = $request->customer_id;
        $purchaseData->purchased_item_id = $purchasedItems->id;
        $purchaseData->date = $request->date;
        $purchaseData->sample = $request->sample;
        $purchaseData->save();
        // dd($purchaseData->customer_id);
        return redirect()->route('item.create',['id'=>$purchaseData->customer_id]);
    }

}
