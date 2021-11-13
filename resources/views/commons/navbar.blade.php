
    <nav id="global_navi">
        <ul>
            
         
            {{-- ユーザ登録ページへのリンク --}}
            <li class="nav-item">{!! link_to_route('signup.get', '会員登録', [], ['class' => 'nav-link']) !!}</li>
           
            
            {{-- ログインページへのリンク --}}
            <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                
            {{-- お問合せへのリンク　--}}
            <li class="nav-item">{!! link_to_route('contact', 'お問合せ', [], ['class' => 'nav-link']) !!}</li>
            
        </ul>
    </nav>

