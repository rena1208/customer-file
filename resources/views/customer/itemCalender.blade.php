@extends('layouts.app')

@section('content')
    <table>
        <!-- テーブルヘッダー -->
        <thead>
            <th>使用状況シート</th>
            <th>&nbsp;</th>
        </thead>

        <!-- テーブル本体 -->
        <tbody>
            <tr>
                {{--@foreach ($purchaseDatas as $purchaseData)--}}
                        {{--<td>{{\Carbon\Carbon::parse($purchaseData->date)->format("m月")}}</td>--}}
                        <th><br></th>
                        <th>６月</th>
                        <th>７月</th>
                {{--@endforeach--}}
            </tr>
            <tr>
            <th>化粧水</th>
                @foreach ($items as $item)
                    <td>
                        @foreach ($item as $i)
                        カテゴリー３
                            @foreach($i->purchasedItems as $purchasedItem)
                       
                                @if (!empty($purchasedItem->item) && $purchasedItem->item->category_id == 3 )
                        
                                    @if ($i->month == '2022-06')
                        
                                
                                
                                        <p>{{optional($purchasedItem->item)->name}}</p>
                                
                                
                                    @endif  
                                @else
                                    <p><br></p>
                           
                            @endif
                            @endforeach
                        @endforeach
                    </td>
                @endforeach
            </tr>        
        </tbody>
    </table>
        
@endsection
