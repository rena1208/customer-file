@extends('layouts.app')

@section('content')
<link href ="{{asset('/assets/css/purchaseIndex.css')}}" rel="stylesheet">
<div class="body">
    <table>
            <!-- テーブルヘッダー -->
            <thead>
                <div class="header">
                    <div class="title">カウンセリング履歴</div>
                        @if ($customer->repeater===0)
                            <div class="name">N- {{$customer->name}}　様</div>
                        @else
                            <div class="name">R- {{$customer->name}}　様</div>
                        @endif
                </div>
            </thead>
    </table>
    <table class="calender">
            <!-- テーブル本体 -->
            <tbody id="index">
                    <tr class="table-title">
                        <th class="th-date">年 月 日</th>
                        <th>購 入 商 品</th>
                        <th>金 額</th>
                        <th>個 数</th>
                        <th>カウンセリングメモ</th>
                        <th class="th-date">サンプル</th>
                    </tr>
            @if (count($purchaseDatas)>0)
        
                @foreach ($purchaseDatas as $purchaseData)
                    <tr>
                    <td class="td-date">{{ \Carbon\Carbon::parse($purchaseData->date)->format("Y年m月d日") }}</td>
                        
                            <td>
                                @foreach($purchaseData->purchasedItems as $purchasedItem)
                                    <p>{{optional($purchasedItem->item)->name}}</p>
                                @endforeach
                            </td>
                            <td>
                                @foreach($purchaseData->purchasedItems as $purchasedItem)
                                <p>{{optional($purchasedItem->item)->price}}</p>
                                @endforeach
                            </td>
                            <td>
                                @foreach($purchaseData->purchasedItems as $purchasedItem)
                                <p>{{$purchasedItem->quantity}}</p>
                                @endforeach
                            </td>

                        <td>{{$purchaseData->comment}}</td>
                        <td class="td-date">{{$purchaseData->sample}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <div class="menu_btn">
            <a href="{{ route('customer.index', ['id'=>$customer->id] )}}" class="btn_back">お客様一覧へ</a>
            <a href="{{ route('item.create', ['id'=>$customer->id]) }}" class="btn">接客内容の登録へ</a>
            <a href="{{ route('item.calender', ['id'=>$customer->id, 'year'=>\Carbon\Carbon::now()->year] )}}" class="btn">使用状況シート</a>
        </div>
        <div class="pagilink">
                {{$purchaseDatas->links()}}
        </div>    
</div>   
@endsection