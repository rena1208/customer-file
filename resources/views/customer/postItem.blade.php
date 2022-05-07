@extends('layouts.app')

@section('content')
<link href ="{{asset('/assets/css/post.item.css')}}" rel="stylesheet">
<body>
    <div class="flex">
        <!-- テーブル商品 -->
        <table id="item">
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
                                <div id=select_i onclick="selectItem( {{$item->id}},'{{$item->name}}' )">{{$item->name}}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 

            <!-- テーブル索引 -->
            <table>
                <tr>
                    <ul>
                        <li class="menu" onclick="menu(this)">メーカー
                            <ul>
                                @foreach ($manufacturers as $manufacturer)
                                    <li id="select_m" onclick="selectManufacturer({{ $manufacturer->id }});select({{ $manufacturer->id }})">{{ $manufacturer->name }}</li>
                                @endforeach                                                                 
                            </ul>
                        </li>
                        <li class="menu" onclick="menu(this)">商品カテゴリー
                            <ul>
                                @foreach ($categories as $category)
                                    <li id="select_c" onclick="selectCategory({{ $category->id }});select({{ $category->id }})">{{ $category->name }}</li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </tr>
            </table>
        <form action="{{ route('item.store', ['id'=>$customer->id]) }}" method="POST">
            @csrf
            {{ session('status') }}
            <div class="box">
                <div>
                    <input type="hidden" name="customer_id" value="{{ $customer->id }}" />
                    <label for="date"> <p>日付</p><input name="date" type="datetime"/></label>
                </div>
                <div>
                    <p>購入商品</p><div id=post_item></dev>
                    <!-- <label for="item_id"><input id=post_item_id name="item_id" type="integer"/></label> -->
                    <!-- <p>個数</p> -->
                    <!-- <label for="quantity"> <p>個数</p><input name="quantity" type="integer"/></label> -->
                </div>
                <div>
                    <p>コメント</p>
                    <label for="comment"><textarea name="comment"　type="text"></textarea></label>
                </div>
                <div>
                    <label for="sample"> <p>サンプル</p><input name="sample" type="string"/></label>
                </div>
            </div>
            <button>登録</button>
                
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
                        <div　id="select_i" onclick="selectItem('${result[i].id}','${result[i].name}')">${result[i].name}</div>
                        
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
                        <div>${name}</div>
                        <input type="hidden" name="ids[]" value="${id}"/>
                        <input name="quantities[]" type="integer"/>個
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