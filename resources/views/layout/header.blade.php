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
                    {!! link_to_route('signup', '新規登録', [], ['class' => 'btn btn-green col-auto']) !!}
                    {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-violet col-auto']) !!}
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

    {{-- 2段左寄せメニュー ログインしていない場合 --}}
    @guest
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(69, 208, 225)">
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item mx-2">
                <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">
                    <i class="fa fa-map-pin faa-vertical"></i>
                    ピックアップ
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/ranking">
                    <i class="fa fa-flag-checkered faa-shake"></i>
                    ランキング
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/users">
                    <i class="fa fa-smile-beam faa-tada"></i>
                    みんなの動画
                </a>
            </li>
            <li class="nav-item mx-4">
                <a class="nav-link text-light faa-parent  animated-hover" href="/login">
                    <i class="fa fa-caret-square-right faa-bounce"></i>
                    動画登録
                </a>
            </li>
        </ul>
    </div>
    @endguest

    {{-- 2段左寄せメニュー ログインしている時 --}}
    @auth
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(69, 208, 225)">
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item mx-2">
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
                <a class="nav-link text-light faa-parent  animated-hover" href="/users">
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
        </div>
    @endauth

    {{-- 2段右寄せメニュー ログインしている場合 --}}
        @auth
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light faa-parent  animated-hover" href="/user/{{Auth::id()}}">
                    <i class="fa fa-user faa-flash"></i>
                    マイページ
                </a>
            </li>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-light faa-parent  animated-hover" href="/logout">
                    <i class="fa fa-door-open faa-ring"></i>
                    ログアウト
                </a>
            </li>
        </ul>
        @endauth
    </nav>
</header>
