<footer>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(245, 138, 7)">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-light" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-light" href="/"><h3>ちるび</h3></a>

        {{-- 右寄せメニュー ログインしていない時 --}}
        @guest
        <div class="collapse navbar-collapse flex-column" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">
                        <i class="fa fa-map-pin faa-vertical"></i>
                        ピックアップ
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/ranking">
                        <i class="fa fa-flag-checkered faa-shake "></i>
                        ランキング
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light" href="/users">みんなの動画</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light" href="/login">動画登録</a>
                </li>
            </ul>
        </div>
        @endguest

        {{-- 右寄せメニュー ログインしている時--}}
        @auth
        <div class="collapse navbar-collapse flex-column" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link text-light faa-parent  animated-hover" href="/pickup">
                        <i class="fa fa-map-pin faa-vertical"></i>
                        ピックアップ
                    </a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light" href="/ranking">ランキング</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light" href="/users">みんなの動画</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-light" href="/videos/create">動画登録</a>
                </li>
            </ul>
        </div>
        @endauth
    </nav>
</footer>
