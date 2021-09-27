
        </button><nav id="global_navi">
        <ul>
            
         
            {{-- ユーザ登録ページへのリンク --}}
            <li class="nav-item">{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
           
            
             {{-- ログインページへのリンク --}}
            <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                
           
            <li><a href="contact.html">お問合せ</a></li>
        </ul>
    </nav>

