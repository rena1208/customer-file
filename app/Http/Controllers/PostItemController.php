<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostItemRequest;
use Carbon\Carbon;

use App\Customer;
use App\PostItem;
use App\Item;
use App\Manufacturer;
use App\Category;
use App\PurchaseData;
use App\PurchasedItem;

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
        return redirect()->route('item.create',['id'=>$purchaseData->customer_id]);
    }

    public function purchasedindex() {
        $purchaseDatas =PurchaseData::with('purchasedItems')->with('purchasedItems.item')->orderBy('date','desc')->paginate(6);
        // dd($purchaseDatas);
        return view('customer/purchaseIndex',compact('purchaseDatas'));
    }

    //使用状況シートに表示
    public function itemCalender(){
        $purchaseDatas = PurchaseData::with('purchasedItems')->with('purchasedItems.item')->get();
        // dd($purchaseDatas);
        // $date = Carbon::parse($purchaseDatas->date)->format("Y年m月");


        $items = PurchaseData::select(DB::raw('DATE_FORMAT(date, "%Y-%m") as month'))
          ->take(10)
          ->get();
  
        $items = $items->groupBy('month')->map(function($item) { return $item; });
        
  
        // $items = $items->groupBy('month')->map(function($item) { return $item; });
        // dd($items);
        // $items = PurchaseData::select(DB::raw('DATE_FORMAT(date, "%Y-%m") as date')
        //          )->whereNotNull('date')->take(10)->get();
        //      dd($items->groupBy('date'));     
        // $items = $items->groupBy('date')->map(function($item) { return $item; });
        // dd($items);       

        return view('customer/itemCalender',compact('purchaseDatas','items'));
        }

}

