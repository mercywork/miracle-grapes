<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>MiracleGrapes[ミラクルグレープス]</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="description" content="山梨でも一部の地域でしか美味しいものが育たない言われる巨峰。お一人様三房までご注文頂けます。">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="app.css">
    </head>
    
    <body>
        <!--ここからヘッダー-->
    <header>
            
        <h1>MiracleGrapes</h1>
        
        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

    </header>
    
    <!--ここからメインビジュアル画像-->
    <div class="main_visual">
    
        @include('commons.img')
        
    </div>
    
    
    <div class="container">
        {{-- エラーメッセージ --}}
        @include('commons.error_messages')

        @yield('content')
    
    </div>
    
    <div class="point">
        <p>
             山梨県内でも限られた地域でしか育たない巨峰。<br>たくさんのものがあふれる今ですが、<br>おいしいものを少しだけ食す喜びをプレゼント致します。
        </p>
    </div>     

    {{-- カード --}}    
    <div class="three_card">
        
        @include('commons.card')
　　
    </div>

        <!--ここからフッター-->
    <footer>
         <small>&copy; MiracleGrapes</small>        
    </footer>
        
      

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        
    </body>
</html>