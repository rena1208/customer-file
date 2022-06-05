@extends('layouts.app')

@section('content')

    @if (count($purchaseData)>0)
        <table class="box">
            <!-- テーブルヘッダー -->
            <thead>
                <th>購入履歴</th>
                <th>&nbsp;</th>
            </thead>

            <!-- テーブル本体 -->
            <tbody id="index">
                @foreach ($purchaseData as $purchaseData)
                    <tr>
                        <td>
                            <div>{{$purchaseData->date->format('Y年m月d日')}}</div>
                        </td>
                        <td>
                            <div>{{$purchaseData->comment}}</div>
                        </td>
                        <td>
                            <div>{{$purchaseData->sample}}</div>
                        </td>
                    </tr>
                    @foreach($purchaseData->purchasedItems as $purchasedItem)
                        <td>
                            <div>{{optional($purchasedItem->item)->name}}</div>
                            <div>{{optional($purchasedItem->item)->price}}</div>
                            <div>{{$purchasedItem->quantity}}</div>
                        </td>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    @endif
@endsection