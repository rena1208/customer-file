<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;
use App\PostItem;
use App\Item;

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
      $items = Item::all();
      $items = Item::orderBy('name','asc')->get();
      // dd($items);//dd
      return view('customer/postItem', compact('customer','items'));
      
    }

//途中（フィルター終わったら）

    // public function store(Request $request)
    // {
    //     $post = new Post;
    //     $post->name = $request->name;
    //     $post->title = $request->title;
    //     $post->content = $request->content;
    //     $post->save();
    //     return redirect()->route('post.create');
    // }

}
