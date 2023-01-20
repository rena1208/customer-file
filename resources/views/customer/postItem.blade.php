@extends('layouts.app')

@section('content')
<link href ="{{asset('/assets/css/post.item.css')}}" rel="stylesheet">
<body>
    <div class="flex">
        <!-- テーブル商品 -->
        <table id="item" class="item">
                <!-- テーブルヘッダー -->
                <thead>
                    <th>商品一覧</th>
                    <th>&nbsp;</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="select-i" id=select_i onclick="selectItem( {{$item->id}},'{{$item->name}}' )">{{$item->name}}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 

            <!-- テーブル索引 -->
            <!-- <table>
                <tr> -->
                    <ul>
                        <li class="menu" onclick="menu(this)">メーカー
                            <ul>
                                @foreach ($manufacturers as $manufacturer)
                                    <li class="menu_m" id="select_m" onclick="selectManufacturer({{ $manufacturer->id }});select({{ $manufacturer->id }})">{{ $manufacturer->name }}</li>
                                @endforeach                                                                 
                            </ul>
                        </li>
                        <li class="menu" onclick="menu(this)">商品カテゴリー
                            <ul>
                                @foreach ($categories as $category)
                                    <li class="menu_c" id="select_c" onclick="selectCategory({{ $category->id }});select({{ $category->id }})">{{ $category->name }}</li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                <!-- </tr>
            </table> -->
        <form action="{{ route('item.store', ['id'=>$customer->id]) }}" method="POST">
            @csrf
            {{ session('status') }}
                @if ($customer->repeater===0)
                    <div class="name">N- {{$customer->name}}　様</div>
                @else
                    <div class="name">R- {{$customer->name}}　様</div>
                @endif
            <div class="box">
                <table>
                    <tr>
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}" />
                        <th class="box-item"><label for="date">日付</th><td class="box-content"><input name="date" type="datetime"/></label><td>
                    </tr>
                    <tr>
                        <th class="box-item">購入商品</th><td id=post_item></td>
                    </tr>
                    <tr>
                        <th class="box-item"><label for="comment">コメント</th><td><textarea class="comment-txt" name="comment"　type="text"></textarea></td></label>
                    </tr>
                    <tr>
                        <th class="box-item"><label for="sample">サンプル</th><td><textarea class="sample-txt" name="sample" type="string"></textarea></td></label>
                    </tr>
                </table>
                    <div class="add-button">
                        <button>登録</button>
                    </div>
            </div>
            <div class="menu_btn">
                <a href="{{ route('customer.index', ['id'=>$customer->id] )}}" class="btn_back">お客様一覧へ</a>
                <a href="{{ route('item.index', ['id'=>$customer->id] )}}" class="btn">購入履歴へ</a>
                <a href="{{ route('item.calender', ['id'=>$customer->id, 'year'=>\Carbon\Carbon::now()->year] )}}" class="btn">使用状況シート</a> 
            </div>
        </form>

        <!-- バリデーションエラー表示  -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <script>
        // クリック開閉式メニュー
        function menu(e) {
            e.classList.toggle("active");

        }

        // 商品フィルター
        const items=@json($items);
        const ele=document.getElementById("item");
        let manufacturer_id=0;
        let category_id=0;

        function selectManufacturer(id){
            manufacturer_id=id
        }
        
        function selectCategory(id){
             category_id=id
            //  console.log(manufacturer_id,category_id);
        }
        
        function select(){
             const result=items.filter(value=>{  
                if(value.manufacturer_id === manufacturer_id 
                        && category_id === 0){
                    document.getElementById("select_m").innerHTML;
                    return value;
                }    
                else if(manufacturer_id === 0 
                        && value.category_id === category_id){
                    document.getElementById("select_c").innerHTML;
                    return value;
                }
                else if(value.manufacturer_id === manufacturer_id
                    && value.category_id === category_id){
                    document.getElementById("select_m", "select_c").innerHTML;
                    return value;
                }
            });
            // console.log(result);　//ここは大丈夫
            ele.innerHTML='';//初期化（空にする）
            for(var i=0; i<result.length; i++){
                //商品の数分追加する
                const appendElement_m= 
                    `
                    <table>
                        <tr>
                            <div class="select-i" id="select_i" onclick="selectItem('${result[i].id}','${result[i].name}')">${result[i].name}</div>
                        </tr>
                    </table>   
                    `
                    // <div　id="select_i" onclick="selectItem('${result[i].id}','${result[i].name}')">${result[i].name}</div>  
                //追加する
                ele.insertAdjacentHTML("beforeend", appendElement_m);
                // console.log(result);
            } 
         } 
         
        function selectItem(id,name) {
            console.log(id,name);
            const purchaseItem=document.getElementById("post_item");
            const appendElementItemName= 
                    `
                    <div class="add-item">
                        <dl>
                            <dt>
                                <p>${name}</p>
                            </dt>
                            <dd>
                                <input type="hidden" name="ids[]" value="${id}"/>
                            </dd>
                        </dl>
                        <dl>
                             <dt>
                                 <input name="quantities[]" type="integer"/> 個
                             </dt>
                        </dl>
                    </div>
                    `
                    // <input type="hidden" name="item_id" value="${id}"/>
            // console.log(manufacturer_id,category_id);
            purchaseItem.insertAdjacentHTML("beforebegin", appendElementItemName);
            // else{
            // purchaseItem.insertAdjacentHTML("beforebegin", appendElementItemName_f);
            // }
            // console.log(item.id);
        }
        // function selectItem_f(id,name) {
        //     const purchaseItem=document.getElementById("post_item");
        //     const appendElementItemName_f= 
        //             `
        //                 <div>${name}</div>
        //                 <input name="quantity" type="integer"/>個
        //                 <input type="hidden" name="id" value="${id}"/>
        //             `
        //     // if(manufacturer_id > 1 && category_id > 1){
        //         purchaseItem.insertAdjacentHTML("beforebegin", appendElementItemName_f);
        //     // }
        // }
    </script> 

</body>
@endsection