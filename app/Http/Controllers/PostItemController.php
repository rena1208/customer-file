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
        // dd($request->date);
        $purchaseData->date = $request->date;
        
        $purchaseData->comment = $request->comment;
        $purchaseData->sample = $request->sample;
        $purchaseData->save();
        foreach($ids as $index => $id){
            // dd($id);
            $purchasedItems = new PurchasedItem;
            // $quantities[$index];
            $purchasedItems->quantity = $quantities[$index];
            // dd($quantities[$index]);
            $purchasedItems->purchase_data_id=$purchaseData->id;
            $purchasedItems->item_id = $id;
            $purchasedItems->save();
        }
        // dd($purchaseData->customer_id);
        $repeat=PurchaseData::where('customer_id', $purchaseData->customer_id)->count();
        // dd($repeat);
        if ($repeat > 1){
            $customer=Customer::find($purchaseData->customer_id);
            // dd($request->customer_id);
            $customer->repeater = true;
            $customer->save();
            }
        return redirect()->route('item.index',['id'=>$purchaseData->customer_id]);
    }

    public function purchasedindex($customerId) {
        $customer = Customer::find($customerId);
        // dd($customer);
        $purchaseDatas =PurchaseData::where('customer_id', $customer->id)->with('purchasedItems')->with('purchasedItems.item')->orderBy('date','desc')->paginate(6);
        // dd($purchaseDatas);
        return view('customer/purchaseIndex',compact('purchaseDatas','customer'));
    }

    //使用状況シートに表示
    public function itemCalender($customerId,$year){
        $customer = Customer::find($customerId);
        // dd($customer);
        
       
        $purchaseDatas = PurchaseData::where('customer_id', $customer->id)->with('purchasedItems')->with('purchasedItems.item')->get();
        // dd($purchaseDatas);
        $itemMonths = PurchaseData::where('customer_id', $customer->id)->select(DB::raw('DATE_FORMAT(date, "%Y-%m") as month'),'date','id')->with('purchasedItems')->with('purchasedItems.item')
          ->get();
  
        $itemMonths = $itemMonths->groupBy('month')->map(function($itemMonths) { return $itemMonths; });

        
        // dd($itemMonths);
        // $itemYears =  PurchaseData::select(DB::raw('DATE_FORMAT(date, "%Y") as year'),'date','id')->with('purchasedItems')->with('purchasedItems.item')
        // ->get();
        // $itemYears = $itemYears->groupBy('year')->map(function($itemYears) { return $itemYears; });
        // dd($itemYears);

        // $year = '2021';

        $months = [
            "$year-01",
            "$year-02",
            "$year-03",
            "$year-04",
            "$year-05",
            "$year-06",
            "$year-07",
            "$year-08",
            "$year-09",
            "$year-10",
            "$year-11",
            "$year-12",
        ];
        // dd($itemYears);
        // dd($months);
        // $thisDate = Carbon::now();
        // $thisYear = $thisDate->year;
        // dd($thisDate->year);

        // foreach ($itemYears as $itemYear)
            // foreach ($itemYear as $year)
            
        return view('customer/itemCalender',compact('purchaseDatas','customer','itemMonths','months','year'));
        }

}

