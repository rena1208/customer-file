@extends('layouts.app')

@section('content')
<link href ="{{asset('/assets/css/itemCalender.css')}}" rel="stylesheet">
    <table>
        <!-- テーブルヘッダー -->
        <thead>
            <div class="header">
                <div class="title">使用状況シート</div>
                    @if ($customer->repeater===0)
                        <div class="name">N- {{$customer->name}}　様</div>
                    @else
                        <div class="name">R- {{$customer->name}}　様</div>
                    @endif
            </div>
        </thead>
    
        <!-- テーブル本体 -->
        <tbody>
            <tr>
                <th>{{$year}} 年</th>
                    @foreach($months as $month)
                        <td class="top">
                        <div class="month">{{ \Carbon\Carbon::parse($month)->format("m月") }}</div>
                        </td>
                    @endforeach
            </tr>
            <tr>
                <th>メイク落とし</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                        
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 1)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        </td>
                    @endforeach
            </tr>
            <tr>
                <th>洗顔料</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                        
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 2)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        </td>
                    @endforeach
            </tr>
            <tr>
                <th>化粧水</th>
                        @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 3)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        </td>
                        @endforeach
            </tr>       
            <tr>
                <th>乳液</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                        
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 4)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                        </td>
                    @endforeach
            </tr>
            <tr>
                <th>UVケア</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 5)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>ファンデーション</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 7)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>下地<br>
                    フェイスパウダー<br>
                    その他<br>
                </th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 8)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>アイメイク</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 9)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>アイブロウ（眉ずみ）</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 10)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>リップ</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 11)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>チーク、その他</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 12)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>スペシャルケア　美白</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 6)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>スペシャルケア　保湿</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 13)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>スペシャルケア　ハリ</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 14)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>スペシャルケア　毛穴</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 15)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
            <tr>
                <th>オールインワン、その他</th>
                    @foreach($months as $month)
                        <td>
                            @foreach($itemMonths as $itemMonth)
                                @foreach($itemMonth as $item)
                                                
                                <!-- <p>{{$item->purchasedItems}}</p> -->
                                    @foreach($item->purchasedItems as $purchasedItem)
                                        @if(!empty($item->purchasedItems) && $item->month === $month && $purchasedItem->item->category_id == 16)
                                            <p>{{$purchasedItem->item->name}}</p>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endforeach
                                </td>
                    @endforeach
            </tr>
                {{--@endforeach--}}
            </tr> 
        </tbody>
    </table>
    <div class="menu_btn">
        <a href="{{ route('customer.index', ['id'=>$customer->id] )}}" class="btn_back">お客様一覧へ</a>
        <a href="{{ route('item.create', ['id'=>$customer->id]) }}" class="btn">接客内容の登録へ</a>
        <a href="{{ route('item.index', ['id'=>$customer->id] )}}" class="btn">購入履歴へ</a>
    </div> 
    <div class="pagilink">
        <a href="{{ route('item.calender', ['id'=>$customer->id, 'year'=>\Carbon\Carbon::now()->year] )}}" class="year">今年</a>
        <a href="{{ route('item.calender', ['id'=>$customer->id, 'year'=>\Carbon\Carbon::now()->year-1] )}}" class="year">昨年</a>
        <a href="{{ route('item.calender', ['id'=>$customer->id, 'year'=>\Carbon\Carbon::now()->year-2] )}}" class="year">おととし</a>
    </div>  
@endsection
