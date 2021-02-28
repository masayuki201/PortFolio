<header>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(255, 255, 255)">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-dark" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-dark" href="/"><h1>ちるび</h1></a>

        {{-- 1段目右寄せメニュー ログインしていない場合 --}}
        @guest
        <div class="collapse navbar-collapse flex-column" id="nav-bar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    {!! link_to_route('signup', '新規登録', [], ['class' => 'btn btn-warning col-auto']) !!}

                    <a class="btn btn-primary col-auto" href="#">ログイン</a>
                </li>
            </ul>
        </div>
        @endguest

        {{-- 1段目右寄せメニュー ログインしている場合 --}}
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
                <a class="nav-link text-light" href="#">ピックアップ</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light" href="#">ランキング</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light" href="#">みんなの動画</a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light" href="#">ヘルプ</a>
            </li>
        </ul>
        </div>

    {{-- 2段右寄せ ログインしている場合 --}}
        @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">動画登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">マイページ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">ログアウト</a>
            </li>
        </ul>
        @endauth
    </nav>
</header>
