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
      $customer=Customer::find($id);
      $customerGender=Customer::with('customerGender')->get();
      $items=Item::orderBy('name','asc')->get();
      $manufacturers=Manufacturer::all();
      $categories=Category::all();
      // dd($categories);//dd
      return view('customer/postItem', compact('customer','items','manufacturers','categories'));
      
    }

// 購入商品投稿　登録ボタンを押したら

    public function store(PostItemRequest $request)
    {   
        $ids=$request->ids;
        // dd($ids);
        $quantities=$request->quantities;
        // dd($quantities);
        $purchaseData = new PurchaseData;
        $purchaseData->customer_id = $request->customer_id;
        $purchaseData->date = $request->date;
        $purchaseData->comment = $request->comment;
        $purchaseData->sample = $request->sample;
        $purchaseData->save();
        // $purchasedItems = new PurchasedItems;
        // $purchasedItems->purchase_data_id=$purchaseData->id;
        // $purchasedItems = new PurchasedItems;
        // $purchasedItems->purchase_data_id=$purchaseData->id;
        foreach($ids as $index => $id){
            // dd($id);
            $purchasedItems = new PurchasedItems;
            // $quantities[$index];
            $purchasedItems->quantity = $quantities[$index];
            // dd($quantities[$index]);
            $purchasedItems->purchase_data_id=$purchaseData->id;
            $purchasedItems->item_id = $id;
            $purchasedItems->save();
        }
        // foreach($quantities as $quantity){
        //     $purchasedItems = new PurchasedItems;
        //     $purchasedItems->purchase_data_id=$purchaseData->id;
        //     $purchasedItems->quantities = $quantity;
        //     $purchasedItems->save();
        // // dd($quantity);
        // }
        
        return redirect()->route('item.create',['id'=>$purchaseData->customer_id]);
    }

}
