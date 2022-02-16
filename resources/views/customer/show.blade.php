@extends('layouts.app')

@section('content')
<link href ="{{asset('/assets/css/show.css')}}" rel="stylesheet">
<body>
    <h1>お客様プロフィール</h1>
    <div class="box">

        <dl>
            <dt>{{$customer->repeater}}　様</dt>
        </dl>
        <dl>
            <dt>お名前</dt> 
            <dd>{{$customer->name}}　/　{{$customer->name_ruby}}　様</dd>
        </dl>
        <dl>
            <dt>性別</dt>
            <dd>{{$customer->customerGender->gender}}</dd>
        </dl>
        <dl>
            <dt>ご住所</dt>
            <dd>{{$customer->address}}</dd>
        </dl>
        <dl>
            <dt>電話番号</dt>
            <dd>{{$customer->phone_number}}</dd>
        </dl>
        <dl>
            <dt>お誕生日</dt>
            <dd>{{$customer->birthday}}</dd>
        </dl>
    </div>                
</body>
@endsection