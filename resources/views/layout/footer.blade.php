<footer>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(220, 220, 220)">
        {{-- サイトロゴ --}}
        <a class="navbar-brand text-dark" href="/"><h6>Children's<br>Videos</h6></a>
        <a class="navbar-brand text-dark" href="/"><h3>ちるび</h3></a>

        {{-- 右寄せメニュー ログインしていない時 --}}
        @guest
        <div class="collapse navbar-collapse flex-column" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="/pickup">ピックアップ</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-dark" href="ranking">ランキング</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-dark" href="/users">みんなの動画</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-dark" href="/login">動画登録</a>
                </li>
            </ul>
        </div>
        @endguest

        {{-- 右寄せメニュー ログインしている時--}}
        @auth
        <div class="collapse navbar-collapse flex-column" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark" href="/pickup">ピックアップ</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-dark" href="ranking">ランキング</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-dark" href="/users">みんなの動画</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link text-dark" href="/videos/create">動画登録</a>
                </li>
            </ul>
        </div>
        @endauth
    </nav>

</footer>
