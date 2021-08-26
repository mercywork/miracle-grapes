<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>MiracleGrapes[ミラクルグレープス]</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="description" content="山梨でも一部の地域でしか美味しいものが育たない言われる巨峰。お一人様三房までご注文頂けます。">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css　integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    
    <body>
        <!--ここからヘッダー-->
    <header>
            
        <h1>MiracleGrapes</h1>
        
        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

    </header>   
    
        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')
        </div>
         
        
        <!--ここからメインビジュアル画像-->
        <div id="main_visual">
        </div>
        
        <!--ここからwrapperー-->
        <div id="wrapper">
        </div>
        
        <!--ここからフッター-->
        <footer>
        </footer>
        
      

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        
    </body>
</html>