<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>商品一覧</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="layouts.css">
        
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

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" >
                        <!-- Authentication Links -->
                     @guest
                           <li class="nav-item">
                               <a class="nav-link" style="color:#fefefe;"  href="{{ route('login') }}">{{ __('ログイン') }}</a>
                           </li>
                           @if (Route::has('register'))
                               <li class="nav-item">
                                   <a class="nav-link" style="color:#fefefe;"  href="{{ route('register') }}">{{ __('会員登録') }}</a>
                               </li>
                           @endif
                     @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" style="color:#fefefe;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                       {{ __('ログアウト') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>

                                   {{-- 追加 --}}
                                   <a class="dropdown-item" href="{{ url('/mycart') }}">
                                       カートを見る
                                   </a>
                               </div>
                           </li>
                           {{-- 追加 --}}
                           <a href="{{ url('/mycart') }}" >
                               <img src="{{ asset('image/cart.png') }}" class="cart" >
                           </a>
                       @endguest
                       
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
        
        <footer>
         <small>&copy; MiracleGrapes</small>        
        </footer>  

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>