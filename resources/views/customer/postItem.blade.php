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
                            <li>資生堂</li>
                            <li>カネボウ</li>
                            <li>コーセー</li>
                            <li>ソフィーナ</li>
                            <li>ロート製薬</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>メイク落とし</li>
                            <li>洗顔</li>
                            <li>化粧水</li>
                            <li>乳液・クリーム</li>
                            <li>UVケア</li>
                            <li>スペシャルケア　美白</li>
                            <li>スペシャルケア　保湿</li>
                            <li>スペシャルケア　ハリ</li>
                            <li>スペシャルケア　毛穴</li>
                            <li>フェンデーション</li>
                            <li>下地・フェイスパウダー</li>
                            <li>アイメイク</li>
                            <li>アイブロウ</li>
                            <li>リップ</li>
                            <li>チーク・その他</li>
                            <li>オールインワン</li>
                        </ul>
                    </li>
                </ul>
            </th>
        </thead>
        <!-- テーブル本体 -->
        <tbody>
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
        function menu(e) {
            e.classList.toggle("active");
            console.log(e);
        }
    </script> 

</body>
@endsection