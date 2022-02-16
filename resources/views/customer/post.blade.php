@extends('layouts.app')

@section('content')
 <link href ="{{asset('/assets/css/customer.create.css')}}" rel="stylesheet">
 <div class="container">
    <div class="box" >
            <form action="{{ route('post.store') }}" method="POST">
            @csrf
            {{ session('status') }}
            <div class="new_customer">
                <label for="name"> <p>名前</p><input id="new_customer" name="name" type="string"/>様 </label>
            </div>
            <div class="new_customer">
            <label for="name_ruby"><p>ふりがな</p><input id="name_ruby" name="name_ruby" type="string"/></label>
            </div>
            <div class="new_customer">
                <p>性別<br>
                <select name="gender_id">
                    <option value=1>男性</option>
                    <option selected value=2>女性</option>
                </select>
                </p>
            </div>
            <div class="new_customer">
                <label for="phone_number"><p>電話番号</p><input id="phone_number" name="phone_number" type="string"/></label>
            </div>
            <div class="new_customer">
                <label for="address"><p>ご住所</P><input id="address" name="address" type="text"/></label>
            <div class="new_customer">
                <label for="birthday"><p>誕生日</P><input id="birthday" name="birthday" type="datetime"/></label>
            </div>
            <button>送信</button>
            </form>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
     </div>
</div>
@endsection