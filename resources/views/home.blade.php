 @extends('layouts.app')

 @section('content') 
<!-- <div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->
  <link href ="{{asset('/assets/css/home.css')}}" rel="stylesheet">

　　<!--　フラッシュメッセージ  -->
　　@if (session('flash_message'))
     <div class = "message" >
       {{ session('flash_message') }}
     </div>
    @endif
    <!--  メニュー一覧 -->
    <div class = "menu">
      <div class = "box-pink">
        <a href = "">お名前検索</a>
      </div>
      <div class = "box-pink">
        <a href = "">お客様追加</a>
      </div>
      <div class = "box-pink">
        <a href = "">購入履歴</a>
      </div>
    </div>

@endsection