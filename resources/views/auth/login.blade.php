 <!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
        <title>ログイン画面</title>
    </head>
    
<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">ホームに戻る</a>
</header>  
 
 <div class="text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post' ]) !!}
                @csrf
                
                @if (session('login_error'))
                    <div class="alert alert-danger">
                        {{ session('login_error')}}
                    </div>
                @endif
                
                @if (session('logout'))
                    <div class="alert alert-danger">
                        {{ session('logout')}}
                    </div>
                @endif
                
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

　　            <div class="button">
                    <div class="btn">
                        {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                </div>
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">はじめての方 {!! link_to_route('signup.get', '会員登録') !!}</p>
        </div>
    </div>
