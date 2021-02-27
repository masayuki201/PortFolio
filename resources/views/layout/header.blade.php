<header class="mb-5">
    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: rgb(0,204,255)">
        <a class="navbarbrand text-dark" href="/">{{ config('app.name', 'アプリ名') }}</a>

        {{-- 右寄せメニュー --}}
        <div class="collape navbar-collape flex-column" id="nav-bar">
            {{-- ログインしている場合 --}}
            @auth

            @endauth
    </nav>


</header>