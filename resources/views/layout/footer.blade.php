<footer>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(245, 138, 7)">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-light" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-light" href="/"><h3>ちるび</h3></a>

        {{-- 右寄せメニュー ログインしていない時 --}}
        @guest
        <div class="collapse navbar-collapse flex-column" >
            <ul class="navbar-nav ml-auto">
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
        @endguest

        {{-- 右寄せメニュー ログインしている時--}}
        @auth
        <div class="collapse navbar-collapse flex-column" >
            <ul class="navbar-nav ml-auto">
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
    </nav>
</footer>
