<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
// use Database\seeds\GendersTableSeeder;
// use Illuminate\Genders\Table\Seeder;

use App\PostCustomer;
use App\Gender;
use App\Customer;
use App\User;

class PostCustomerController extends Controller
{
  public function create(){
    $genders = Gender::all();
    // dd($genders);
    return view ('customer/post',$genders);

    $customers = Customer::all();
  } 

  
  public function store(PostRequest $request){
        // 既に登録済のお客様判別
        $name = Customer::where('name', '=', $request->input('name'))->first(); 
        $phone_number = Customer::where('phone_number', '=', $request->input('phone_number'))->first();
        if ($name === null && $phone_number === null) {
          // $customer = Customer::where('name', $request->name) 
          //             ->where('phone_number',$request->phone_number)
          //             ->first();
          // if(empty($customer) {
          $post = new PostCustomer;
          $post->user_id = $request->user()->id;
          $post->gender_id = $request->gender_id;
          $post->name = $request->name;
          $post->name_ruby = $request->name_ruby;
          $post->phone_number = $request->phone_number;
          $post->address = $request->address;
          $post->birthday = $request->birthday;
          $post->repeater = false;
          $post->save();
          return redirect()->route('post.store');
          // session()->flash('flash_message', 'お客様情報の登録が完了しました！');
          }
        else{
          return redirect()->route('post.create')->with('status','お客様は既に登録されています');
          
        }  
  }

  public function index(){
    $customers = Customer::orderBy('name_ruby','asc')->get();
          return view('index',['customers'=>$customers ]);
  }

  //お客様プロフィール画面の表示
    public function show($id)
    { 
      $customer = Customer::find($id);
      $customerGender = Customer::with('customerGender')->get();
      // dd($customerGender);//dd
      return view('customer/show', compact('customer'));
      
    }

}