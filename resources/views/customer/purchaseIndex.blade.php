@extends('layouts.app')

@section('content')
<link href ="{{asset('/assets/css/purchaseIndex.css')}}" rel="stylesheet">

    @if (count($purchaseDatas)>0)
        <table>
            <!-- テーブルヘッダー -->
            <thead>
                <th>カウンセリング履歴</th>
                <th>&nbsp;</th>
            </thead>

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
            </tbody>
        </table>
            <div　class="pagilink">
                {{$purchaseDatas->links()}}
            </div>
    @endif
@endsection