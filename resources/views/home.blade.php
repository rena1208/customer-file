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
  <link href="{{asset('/assets/css/home.css')}}" rel="stylesheet">

　　<!--　フラッシュメッセージ  -->
　　@if (session('flash_message'))
     <div class="message" >
       {{ session('flash_message') }}
     </div>
    @endif
    <!--  メニュー一覧 -->
    <table>
      <tr>
        <td><div class="box-pink">
          <img src="{{ asset('img/CC32BF43-C1AB-4FEF-A320-6D1E9058BCB5_4_5005_c.jpeg') }}"
          class="icon">
          <a class="menu" href="#">お名前検索</a>
        </div></td>
        <td><div class="box-orenge">
          <img src="{{ asset('img/00E74E47-4F70-4742-BEB4-E2A9FAB30C3D_4_5005_c.jpeg') }}"
           class="icon">
          <a class="menu" href="/post/customer">お客様追加</a>
        </div></td>
        <td><div class="box-pink">
          <img src="{{ asset('img/00F19716-B411-466A-95B3-243A8B24EDAE_4_5005_c.jpeg') }}"
           class="icon">
          <a class="menu" href="/index">購入履歴</a>
        </div></td>
      </tr>
</table>

@endsection