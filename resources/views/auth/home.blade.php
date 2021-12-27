<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
        <title>ホーム画面</title>
    </head>
    <body>
        <div class="container">
            <div class="mt-5">
                @if (session('login_success'))
                    <div class="alert alert-success">
                        {{ session('login_success')}}
                    </div>
                @endif
                <h3>ようこそ　MiracleGrapesへ！</h3>
            </div>
            <ul>
                <li>お名前: {{ Auth::user()->name }}</li>
                <li>メールアドレス: {{ Auth::user()->email }}</li>
            </ul>
            
            
            
            <form action="{{ route('logout') }}"
            method="POST">
                
                @csrf
                <button class="btn btn-danger">ログアウト</button>
            </form>
            
            <div class="product">
                
            <a href="/shop">商品一覧へ</a>
            
            </div>
        </div>
    </body>
    </html>