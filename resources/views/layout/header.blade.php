<header>
    {{-- サイトロゴ --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(255, 255, 255)">
        <a class="navbar-brand text-dark" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-dark mr-auto" href="/"><h1>ちるび</h1></a>

        {{-- 1段目右寄せメニュー ログインしている場合 ニックネームを表示する--}}
        @auth
        <div class="site-description ml-auto">
            {{Auth::user()->nickname}}さん
        </div>
        @endauth
    </nav>

    {{-- 2段左寄せメニュー ログインしていない場合 --}}
    @guest
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(69, 208, 225)">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-navi" aria-controls="bs-navi" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <nav class="collapse navbar-collapse" id="bs-navi">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">
                    <i class="fa fa-map-pin faa-vertical fa-fw"></i>
                    ピックアップ
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/ranking">
                    <i class="fa fa-flag-checkered faa-shake fa-fw"></i>
                    ランキング
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/index">
                    <i class="fa fa-smile-beam faa-tada fa-fw"></i>
                    みんなの動画
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/login">
                    <i class="fa fa-caret-square-right faa-bounce fa-fw"></i>
                    動画登録
                </a>
            </li>
        </ul>

    {{-- 2段右寄せメニュー ログインしていない場合 --}}
        <ul class="navbar-nav">
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/signup">
                    <i class="fa fa-user faa-flash"></i>
                    新規登録
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/login">
                    <i class="fa fa-door-open faa-ring"></i>
                    ログイン
                </a>
            </li>
        </ul>
    </nav>
    @endguest

    {{-- 2段左寄せメニュー ログインしている時 --}}
    @auth
    <nav class="navbar navbar-expand-xl navbar-dark" style="background-color: rgb(69, 208, 225)">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#bs-navi" aria-controls="bs-navi" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="bs-navi">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">
                    <i class="fa fa-map-pin faa-vertical fa-fw"></i>
                    ピックアップ
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/ranking">
                    <i class="fa fa-flag-checkered faa-shake fa-fw"></i>
                    ランキング
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/index">
                    <i class="fa fa-smile-beam faa-tada fa-fw"></i>
                    みんなの動画
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/videos/create">
                    <i class="fa fa-caret-square-right faa-bounce fa-fw"></i>
                    動画登録
                </a>
            </li>
        </ul>

    {{-- 2段右寄せメニュー ログインしている場合 --}}
        <ul class="navbar-nav">
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/user/{{Auth::id()}}">
                    <i class="fa fa-user faa-flash"></i>
                    マイページ
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/logout">
                    <i class="fa fa-door-open faa-ring"></i>
                    ログアウト
                </a>
            </li>
        </ul>
        </div>
    </nav>
    @endauth
</header>
