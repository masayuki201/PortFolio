<header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(255, 255, 255)">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-dark" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-dark" href="/"><h1>ちるび</h1></a>

        {{-- 1段目右寄せメニュー ログインしていない場合 新規登録・ログインボタンを表示する--}}
        @guest
        <div class="collapse navbar-collapse flex-column" id="nav-bar">
            <div class="navbar-nav ml-auto">
                <div class="nav-item">
                    {!! link_to_route('signup', '新規登録', [], ['class' => 'btn btn-warning col-auto']) !!}
                    {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-primary col-auto']) !!}
                </div>
            </div>
        </div>
        @endguest

        {{-- 1段目右寄せメニュー ログインしている場合 ニックネームを表示する--}}
        @auth
        <div class="site-description ml-auto">
            {{Auth::user()->nickname}}さん
        </div>
        @endauth
    </nav>

    {{-- 2段左寄せメニュー --}}
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(30, 141, 225)">
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item mx-2">
                <a class="nav-link text-light" href="/pickup">ピックアップ</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light" href="ranking">ランキング</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light" href="/users">みんなの動画</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light" href="/login">動画登録</a>
            </li>
        </ul>
        </div>

    {{-- 2段右寄せ ログインしている場合 --}}
        @auth
        <ul class="navbar-nav ml-auto">
            <div class="nav-item">
                {!! link_to_route('videos.create','動画登録',['id'=>Auth::id()],['class'=>'nav-link text-light']) !!}
            </div>
            <li class="nav-item">
                <a class="nav-link text-light" href="/user/{{Auth::id()}}">マイページ</a>
            </li>
            <div class="nav-item">
                {!! link_to_route('logout', 'ログアウト', [], ['class' => 'nav-link text-light']) !!}
            </div>
        </ul>
        @endauth
    </nav>
</header>
