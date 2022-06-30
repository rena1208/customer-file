@extends('layouts.app')

@section('content')
        @foreach ($purchaseDatas as $purchaseData)
        
                @foreach($purchaseData->purchasedItems as $purchasedItem)
                {{\Carbon\Carbon::parse($purchasedItem->date)->format("Y年m月")}}
                    {{optional($purchasedItem->item)->name}}
                @endforeach

            <!-- {{$purchaseData->date}} -->
        @endforeach
@endsection