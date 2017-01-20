<!DOCTYPE html>
<html lang="{{ locale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@yield('title', 'Sebastian De Deyne')</title>

        <meta charset="utf-8">
        <meta name="description" content="@yield('meta', 'I\'m a full-stack developer working at Spatie in Antwerp, Belgium.')">

        <link rel="alternate" type="application/rss+xml" title="Sebastian De Deyne — Posts" href="{{ url('feed') }}" />

        @include('_partials.favicons')

        <link href="https://fonts.googleapis.com/css?family=Alegreya|Source+Sans+Pro:600"   rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/site.css">

        <script src="/js/app.js" defer></script>

        @stack('head')
    </head>
    <body>
        @yield('content')
        @if(app()->environment('production'))
            @include('_partials.analytics')
        @endif
    </body>
</html>
