@extends('layouts.app')

 @section('content')
 <link href="{{asset('/assets/css/index.css')}}" rel="stylesheet">
    <!-- さくいん -->
    <!-- <div id="index_ne"></div> -->
    <div class="flex">
        <ul class="index-btn">
            <li class="index" onclick="select_r(this)">あ行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">あ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">い</li>
                    <li class="index_s" onclick="select_c(this.textContent)">う</li>
                    <li class="index_s" onclick="select_c(this.textContent)">え</li>
                    <li class="index_s" onclick="select_c(this.textContent)">お</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">か行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">か</li>
                    <li class="index_s" onclick="select_c(this.textContent)">き</li>
                    <li class="index_s" onclick="select_c(this.textContent)">く</li>
                    <li class="index_s" onclick="select_c(this.textContent)">け</li>
                    <li class="index_s" onclick="select_c(this.textContent)">こ</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">さ行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">さ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">し</li>
                    <li class="index_s" onclick="select_c(this.textContent)">す</li>
                    <li class="index_s" onclick="select_c(this.textContent)">せ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">そ</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">た行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">た</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ち</li>
                    <li class="index_s" onclick="select_c(this.textContent)">つ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">て</li>
                    <li class="index_s" onclick="select_c(this.textContent)">と</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">な行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">な</li>
                    <li class="index_s" onclick="select_c(this.textContent)">に</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ぬ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ね</li>
                    <li class="index_s" onclick="select_c(this.textContent)">の</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">は行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">は</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ひ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ふ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">へ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ほ</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">ま行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">ま</li>
                    <li class="index_s" onclick="select_c(this.textContent)">み</li>
                    <li class="index_s" onclick="select_c(this.textContent)">む</li>
                    <li class="index_s" onclick="select_c(this.textContent)">め</li>
                    <li class="index_s" onclick="select_c(this.textContent)">も</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">や行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">や</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ゆ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">よ</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">ら行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">ら</li>
                    <li class="index_s" onclick="select_c(this.textContent)">り</li>
                    <li class="index_s" onclick="select_c(this.textContent)">る</li>
                    <li class="index_s" onclick="select_c(this.textContent)">れ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ろ</li>
                </ul>
            </li>
            <li class="index" onclick="select_r(this)">わ行
                <ul>
                    <li class="index_s" onclick="select_c(this.textContent)">わ</li>
                    <li class="index_s" onclick="select_c(this.textContent)">を</li>
                    <li class="index_s" onclick="select_c(this.textContent)">ん</li>
                </ul>
            </li>
        </ul>  
    
        @if (count($customers)>0)

            <table class="box">
                <!-- テーブルヘッダー -->
                <thead>
                    <th>お客様一覧</th>
                    <th>&nbsp;</th>
                </thead>
                <!-- テーブル本体 -->
                <tbody id="index">
                    @foreach ($customers as $customer)
                    <tr class="box-item">
                        <td>
                            <div class="table-text">{{$customer->name}}</div>
                        </td>
                        <td>
                            <div class="table-text">{{$customer->name_ruby}}</div>
                        </td>
                        <td><a href="{{ route('customer.profile', ['id'=>$customer->id]) }}" class="btn">詳細</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
        @endif


<!-- さくいんクリック開閉 -->
<script>
    function select_r(row) {
        row.classList.toggle("active");
    }
</script>
<!-- 絞り込み -->
<script>
        customers=@json($customers); 
        const post=document.getElementById("customer.name_ruby");
        const dakuonHandakuon = [
    ['が', 'か'],
    ['ぎ', 'き'],
    ['ぐ', 'く'],
    ['げ', 'け'],
    ['ご', 'こ'],
    ['ざ', 'さ'],
    ['じ', 'し'],
    ['ず', 'す'],
    ['ぜ', 'せ'],
    ['ぞ', 'そ'],
    ['だ', 'た'],
    ['ぢ', 'ち'],
    ['づ', 'つ'],
    ['で', 'て'],
    ['ど', 'と'],
    ['ば', 'は'],
    ['び', 'ひ'],
    ['ぶ', 'ふ'],
    ['べ', 'へ'],
    ['ぼ', 'ほ'],
    ['ぱ', 'は'],
    ['ぴ', 'ひ'],
    ['ぷ', 'ふ'],
    ['ぺ', 'へ'],
    ['ぽ', 'ほ'],
    ];

        function select_c(column) {
            const result=customers.filter(value => {
                // if (value.name_ruby > 0) {
                    // console.log(textContent);
                    for (let i = 0; i < dakuonHandakuon.length; i++) {
                        let convertName_ruby=dakuonHandakuon[i];
                        var text=value.name_ruby.replace(new RegExp(convertName_ruby[0], 'g'), function() {
                            return convertName_ruby[1];
                         });
                        
                        if(text.charAt(0) === column) {
                            return value;
                        }
                        console.log(column);
                     }
                // }
            });
            
            // document.getElementById("index").innerHTML = result[0].name_ruby;
            const ele=document.getElementById("index");
            
            ele.innerHTML='';//初期化（空にする）
            console.log(result);
            for(var i=0; i<result.length; i++){
                //人数分追加する
                const appendElement= 
                `
                <table class="box">
                    <tr class="box-item">
                        <td><div class="table-text">${result[i].name}</div></td>
                    
                        <td><div class="table-text">${result[i].name_ruby}</div></td>

                        <td><a href="/profile/${result[i].id}" class="btn">詳細</a></td>
                    </tr>
                </table>
                
                `
                
                //追加する
                ele.insertAdjacentHTML("beforeend", appendElement);
            }
        }

    </script>
 @endsection