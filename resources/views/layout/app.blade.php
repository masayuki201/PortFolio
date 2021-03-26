<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('/css/styles.css') }}"> --}}
    <link rel="stylesheet" href="/css/style.css">

    <title>@yield('title')</title>
</head>

<body>
    @include('layout.header')

        @include('layout.error_messages')
        @yield('content')

    @include('layout.footer')
</body>

</html>
