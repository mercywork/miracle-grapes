<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>商品一覧</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>

        {{-- ナビゲーションバー --}}
        <header class="mb-4">
            
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
                <a class="navbar-brand" href="/">ホームに戻る</a>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        {{-- ユーザ登録ページへのリンク --}}
                        <li class="nav-item"><a href="#" class="nav-link">サインアップ</a></li>
                        {{-- ログインページへのリンク --}}
                        <li class="nav-item"><a href="#" class="nav-link">ログイン</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">
            {{-- エラーメッセージ --}}
        @if (count($errors) > 0)
    　　　　<ul class="alert alert-danger" role="alert">
    　　　　    
        　　    @foreach ($errors->all() as $error)
                 <li class="ml-4">{{ $error }}</li>
              @endforeach
    　　　　</ul>
    
        @endif


            @yield('content')

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>