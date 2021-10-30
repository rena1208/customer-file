@extends('layouts.app')

@section('content')
<div class="container">
<link href ="{{asset('/assets/css/top.css')}}" rel="stylesheet">

    <div class = "main">
       <table class = "app-title">
          <tr>
            <td><img src = "{{ asset('img/B8C9CC84-C017-4F33-A51C-8C532A3C8828_1_201_a.jpeg') }}"
                 class = "icon_l"></td>
            <td><h1>化粧品顧客管理台帳<h1></td>
            <td><img src = "{{ asset('img/F1502F0C-9B2B-4A73-8330-4603B81F1F1B_1_201_a.jpeg') }}"
                 class = "icon_r" ></td>
          </tr>
       </table>
      <div  class = "box">
      <div class="row justify-content-center"> 
        <div class="col-md-8">
           <!-- <div class="card"> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                       <div class="form-group row">
                            <label for="login_id" class="col-md-4 col-form-label text-md-right">店舗ID</label>
 
                            <div class="col-md-6">
                               <input id="login_id" type="text" class="form-control @error('login_id') is-invalid @enderror" name="login_id" value="{{ old('login_id') }}" required autocomplete="login_id" autofocus>
 
                                @error('login_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('ログイン情報を保存') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ログイン') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('パスワードを忘れましたか?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
      </div>
      
    </div>
</html>
    

                       
