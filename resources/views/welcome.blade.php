<!DOCTYPE html>
<html>
  <head>
    <link href ="{{asset('/assets/css/welcome.css')}}" rel="stylesheet">
    <title>化粧品顧客台帳</title>
  </head>
  <body>
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
        <div class = "login-form">
          <p>店舗ID</p>
          <input>
          <p>パスワード</p>
          <input>
          <p></p>
          <input type = "submit" value = "ログイン">
        </div>
      </div>
        <a href = "" >新規登録</a>
      
    </div>
</body>
</html>