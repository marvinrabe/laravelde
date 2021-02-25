<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
    <meta property="og:type" content="{{ $page->type ?? 'website' }}"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">

    @if ($page->production)
    <script async defer data-domain="laravelphp.de" src="https://stats.laravelphp.de/js/index.js"></script>
    @endif

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>

<body class="bg-blueGray-100 text-gray-800 leading-normal font-sans">
<header class="flex items-center h-24 py-4" role="banner">
    <div class="container flex items-center max-w-4xl mx-auto px-4 lg:px-8">
        <div class="flex items-center">
            <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo"/>

                <h1 class="text-lg md:text-2xl text-gray-800 hover:text-blue-600  font-semibold my-0">{{ $page->siteName }}</h1>
            </a>
        </div>

        <div class="flex flex-1 justify-end items-center">
            @include('_nav.menu')

            @include('_nav.menu-toggle')
        </div>
    </div>
</header>

@include('_nav.menu-responsive')

<div class="container max-w-4xl mx-auto">
    <main class="flex-auto w-full" role="main">
        <div class="rounded bg-white px-8 py-12">
            @yield('body')
        </div>
    </main>

    <footer class="text-center text-sm py-4 px-8" role="contentinfo">
        <ul class="flex flex-col md:flex-row justify-center md:justify-between gap-4 list-none">
            <li>
                Webseite wird betrieben von
                <a href="https://www.rabe.pro/" class="text-gray-600" target="_blank" rel="author noopener">Marvin Rabe</a>.
            </li>

            <li>
                Fehlt etwas?
                <a href="https://github.com/marvinrabe/laravelphp.de" class="text-gray-600" target="_blank"
                   rel="noopener">Erstelle ein Pull Request</a>.
            </li>
        </ul>
        <div class="flex flex-col justify-center">
            <span>LaravelPHP.de sowie die Meetup Server werden gesponsert von</span>
            <img src="/assets/img/hetzner-logo.svg" alt="Hetzner Online GmbH" class="h-5 mb-1 mt-2">
        </div>
    </footer>
</div>

@stack('scripts')
</body>
</html>
