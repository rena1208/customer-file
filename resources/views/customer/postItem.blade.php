@extends('layouts.app')

@section('content')
<link href ="{{asset('/assets/css/post.item.css')}}" rel="stylesheet">
<body>
    <form action="{{ route('item.store', ['id'=>$customer->id]) }}" method="POST">
        @csrf
        {{ session('status') }}
            <div>
                <label for="visited_on"> <p>日付</p><input name="visited_on" type="datetime"/></label>
            </div>
            <div>
                <label for="item_id"> <p>購入商品</p><input name="item_id" type="integer"/></label>
                <label for="quantity"> <p>個数</p><input name="quantity" type="integer"/></label>
            </div>
            <div>
                <p>コメント</p>
                <textarea name="comment"></textarea>
            </div>
            <div>
                <label for="sampl"> <p>サンプル</p><input name="sampl" type="string"/></label>
            </div>
            <button>登録</button>
    </form>


    <table>
        <!-- テーブルヘッダー -->
        <thead>
            <th>商品一覧</th>
            <th>
                <ul>
                    <li class="menu" onclick="menu(this)">メーカー
                        <ul>
                            @foreach ($manufacturers as $manufacturer)
                                <li id="select_m" onclick="selectManufacturer({{ $manufacturer->id }});select({{ $manufacturer->id }})">{{ $manufacturer->name }}</li>
                                <!-- ;select({{ $manufacturer->id }}) -->
                            @endforeach                                                                 
                        </ul>
                    </li>
                    <li class="menu" onclick="menu(this)">商品カテゴリー
                        <ul>
                            @foreach ($categories as $category)
                                <li id="select_c" onclick="selectCategory({{ $category->id }});select({{ $category->id }})">{{ $category->name }}</li>
                                <!-- ;select({{ $manufacturer->id }}) -->
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </th>
        </thead>
        <!-- テーブル本体 -->
        <tbody id="item">
            @foreach ($items as $item)
                <tr>
                    <td>
                        <div>{{$item->name}}</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 

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
             console.log(result);
            ele.innerHTML='';//初期化（空にする）
            for(var i=0; i<result.length; i++){
                //商品の数分追加する
                const appendElement_m= 
                    `
                        <div>${result[i].name}</div>
                        
                    `
                    
                //追加する
                ele.insertAdjacentHTML("beforeend", appendElement_m);
            } 
         } 
        //  function select_c($category_id){
        //     const result=items.filter(value=>{
        //         if(value.category_id === $category_id){
        //             document.getElementById("select_c").innerHTML;
        //             return value; 
        //         }
        //     });

        //     ele.innerHTML='';//初期化（空にする）
        //     for(var i=0; i<result.length; i++){
        //         //商品の数分追加する
        //         const appendElement_c= 
        //             `
        //                 <div>${result[i].name}</div>
                        
        //             `
                    
        //         //追加する
        //         ele.insertAdjacentHTML("beforeend", appendElement_c);
        //     } 
        
        // }

    </script> 

</body>
@endsection