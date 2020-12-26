@extends('_layouts.master')

@section('body')
    <h2 class="text-4xl">Hallo, 👋</h2>
    <p class="text-xl">dies ist die <strong>deutschsprachige</strong> Community für alle <strong>Laravel</strong>
        Entwickler. Ganz egal ob Anfänger oder Experte, du bist herzlich willkommen.</p>

    @include('_components.newsletter-signup')

    <h2 class="text-4xl">Social Media</h2>

    <p class="text-xl">Unterhalte dich mit anderen Entwicklern online.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($page->social as $platform)
            <a href="{{ $platform['url'] }}" rel="noopener" class="block p-4 rounded text-white hover:text-white hover:opacity-90 flex items-center" style="background: {{$platform['color']}};">
                <img src="/assets/img/social/{{ $platform['icon'] }}.svg" class="mr-4 h-6" alt="">
                <span class="block font-bold">
                    {{ $platform['title'] }}
                </span>
            </a>
        @endforeach
    </div>

    <hr>

    <h2 class="text-4xl">Meetups</h2>

    <p class="text-xl">Laravel Entwickler aus deiner Nähe kennenlernen.</p>

    <h3 class="text-2xl">🇩🇪 Deutschland</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($page->userGroupsDe as $group)
            <a href="{{ $group['url'] }}" rel="noopener" class="block p-4 border bg-white hover:bg-gray-50 rounded">
                <span class="block font-bold">
                    {{ $group['title'] }}
                </span>
                <span class="block font-light text-xs text-gray-600">{{ $group['members'] }} Artisans</span>
            </a>
        @endforeach
    </div>

    <h3 class="text-2xl">🇦🇹 Österreich</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($page->userGroupsAt as $group)
            <a href="{{ $group['url'] }}" rel="noopener" class="block p-4 border bg-white hover:bg-gray-50 rounded">
                <span class="block font-bold">
                    {{ $group['title'] }}
                </span>
                <span class="block font-light text-xs text-gray-600">{{ $group['members'] }} Artisans</span>
            </a>
        @endforeach
    </div>

    <h3 class="text-2xl">🇨🇭 Schweiz</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($page->userGroupsCh as $group)
            <a href="{{ $group['url'] }}" rel="noopener" class="block p-4 border bg-white hover:bg-gray-50 rounded">
                <span class="block font-bold">
                    {{ $group['title'] }}
                </span>
                <span class="block font-light text-xs text-gray-600">{{ $group['members'] }} Artisans</span>
            </a>
        @endforeach
    </div>
@stop
