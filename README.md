# 『化粧品顧客管理台帳』<br>接客内容を簡単に管理、店舗内で共有できるWEBアプリケーション

<img width="900" alt="スクリーンショット 2022-12-20 1 15 37" src="https://user-images.githubusercontent.com/72782628/208661839-b3fc762c-c1bf-4f33-b214-95cd0594b581.png">

# 概要

化粧品を購入して頂いたお客様の個人情報の登録、接客内容と購入商品を店舗内で共有するWEBアプリケーション

① 現職で実際に使用している紙ベースの顧客管理台帳を、WEBアプリケーションにすることによる作業の簡略化<br>
② パソコンやスマートホンなどの操作が苦手な方でも簡単に使用できる仕様にすること<br>

特にこの２点を特に意識して設計、コーディングを行いました。

# 制作背景
現在使用している顧客管理台帳の欠点として

① 顧客管理をする際に使用する索引用の用紙の書き換えに時間がかかる<br>
② 購入商品の記入の際記入する用紙が２種類あるためその記入に時間がかかる<br>

など作業効率が良くない点がありました。  
店舗での業務はさまざまな業務を並行して行うため、こうした非効率な部分は後の作業の進捗に支障が出てしまう時がありました。  
そういった問題を解決できるものを作りたいと思い今回こちらのアプリケーションの開発を進めました。


    
アプリURL [https://customerfile-portfolio.com](https://customerfile-portfolio.com) 

ゲストユーザー用
店舗ID: 001234  
パスワード: sp001234  

# 画面操作説明
## ●お客様新規登録
※ログイン後（ユーザー登録必須）  
      ①ホーム画面からお客様追加を選択  
      ②お客様自身に個人情報を入力していただき送信  
      ③お客様プロフィールで入力内容を確認  
      
![画面収録 2022-12-25 13 44 17](https://user-images.githubusercontent.com/72782628/209492987-956e3459-af1c-43f1-89a3-ad2c0fe92bb4.gif)

      
      
## ●接客履歴の登録
※ログイン後  
      ①ホーム画面の購入履歴を選択  
      ②接客をするお客様の名前を選択  
        左の索引ボタンでお名前の頭文字を選択すると、一覧の絞り込みができる  
      ③お客様のプロフィール画面へ移動するので、お名前があっているか確認後、接客内容の登録へを選択    
      ④お客様が購入した商品を選択し、個数を入力、日付などの必要な項目を記入  
      　商品もメーカー、カテゴリーで絞り込みをするとスムーズに商品を選択できる  
       
![画面収録 2022-12-27 0 57 36](https://user-images.githubusercontent.com/72782628/209567092-22885cc5-dba9-459b-81d0-c4769d57692c.gif)
         
## ●接客中の使用イメージ
①お客様の名前を選択  
②購入履歴を選択して以前購入した商品を確認したり、使用状況シートを選択して使用サイクルを確認する  

<img width="1437" alt="スクリーンショット 2022-12-27 1 21 28" src="https://user-images.githubusercontent.com/72782628/209567367-6b841b0b-057b-4fa8-a743-0e2fbea7c3d9.png">

<img width="1369" alt="スクリーンショット 2022-12-27 1 22 28" src="https://user-images.githubusercontent.com/72782628/209567399-e786f2d4-e8c8-4133-8801-d778dc694d0c.png">

# 使用技術
バックエンド... PHP / laravel  

フロントエンド... JavaScript  

インフラ...AWS(EC2,RDS,Route 53)

データーベース...開発環境　MAMP / 本番環境　MySQL

その他の使用技術...git(GitHub) / Visual Studio Code / PHPUnit

# DB設計
## ●ER図

<img width="1124" alt="スクリーンショット 2022-12-27 1 26 42" src="https://user-images.githubusercontent.com/72782628/209567626-3a4bd70b-ca92-4e3d-baf2-bed5da72d66a.png">

## ●各種テーブル
<!-- users(ユーザー) ... 店舗登録情報<br>
customers(カスタマー)... お客様登録情報<br>
genders（ジェンダー）  ... 性別（お客様新規登録時に使用）<br>
purchase_histories(パーチェスヒストリー) ... お客様の購入履歴<br>
purchased_items(パーチェスアイテム) ...　　お客様の購入商品<br>

manufacturers(マニュファクチャー) ... 商品のメーカー<br>
items(アイテム)　... 商品名<br>
categories(カテゴリー) ... 商品のカテゴリー<br>
special_cares（スペシャルケア） ...　商品カテゴリーの中の美容液などのスペシャルケアの分類<br> -->
|  テーブル名  |  説明  |
| ---- | ---- |
|  users(ユーザー)  |  店舗登録情報  |
|  customers(カスタマー)  |  お客様登録情報  |
| genders（ジェンダー） | 性別（お客様新規登録時に使用） |
| purchase_histories(パーチェスヒストリー) | お客様の購入履歴 |
| purchased_items(パーチェスアイテム) | お客様の購入商品 |
| manufacturers(マニュファクチャー) | 商品のメーカー |
| items(アイテム) | 商品名 |
| categories(カテゴリー) | 商品のカテゴリー |
| special_cares（スペシャルケア） | 商品カテゴリーの中の美容液などのスペシャルケアの分類 |
# アプリ機能一覧
## ●メイン機能
◯ユーザー登録<br>
◯お客様情報登録<br>
◯お客様一覧の絞り込み機能<br>
◯接客履歴の登録<br>
◯接客履歴登録の際に使用する商品一覧の絞り込み機能<br>
◯顧客情報に紐づく接客履歴の表示<br>
◯接客履歴に紐づく使用状況シートの表示<br>

## ●工夫した点
### ○購入履歴の入力のしやすさ
お客様の一覧の中から頭文字を選択し絞り込む機能を、JavaScriptで実装しました。<br>
また、商品をメーカーやカテゴリーで絞り込み検索できるように、JavaScriptで実装しました。

### ○使用状況を月別のカレンダーで表示（使用状況シート）
リレーションや、SQL文を使ってデータを生成し、表示でif文やfor文を駆使してカレンダー風のUIを実現しました。<br>
パラメーターに年を付与することで今年以前のものも表示することができます。

### ○データの取得を意識したDB設計
商品をカテゴリーやスペシャルケアなどの分類で取得することができるようにDB設計しました。<br>
購入履歴に紐づく商品のデータのリレーションで取得し表示しました。

# 最後に
大変お忙しい中、最後までご覧いただき誠にありがとうございました。








      

