@extends('_layouts.master')

@section('body')
    <h2 class="text-4xl">Hallo, 👋</h2>
    <p class="text-xl">dies ist die <strong>deutschsprachige</strong> Community für alle <strong>Laravel</strong>
        Entwickler. Ganz egal ob Anfänger oder Experte, du bist herzlich willkommen. Wir machen regelmäßige
        <strong>Online-Meetups</strong>: sei dabei, teile dein Wissen und chatte mit anderen Laravel Entwicklern.</p>

    {{--    <div class="flex mx-auto max-w-md">--}}

    {{--        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">--}}
    {{--            <a href="/talk-einreichen"--}}
    {{--               class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-500 bg-white hover:text-red-600 focus:outline-none focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">--}}
    {{--                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
    {{--                     stroke="currentColor">--}}
    {{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
    {{--                          d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>--}}
    {{--                </svg>--}}
    {{--                Talk einreichen--}}
    {{--            </a>--}}
    {{--        </div>--}}

    {{--    </div>--}}

    <div class="-mx-6 md:-mx-12 my-6 md:my-12 px-6 py-8 md:py-12 md:px-5 border text-sm md:rounded-xl text-blueGray-200 text-center bg-gradient-to-br from-blueGray-700 to-blueGray-800">

        <h3 class="text-blueGray-400 text-lg md:text-2xl mb-2">Nächstes Online-Meetup</h3>

        <p class="text-xl md:text-3xl font-bold mt-0">{{ $page->upcomingOnlineMeetup->date->format('d.m.Y H:i') }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-2xl mb-12 mx-auto">
            @foreach($page->upcomingOnlineMeetup->talks as $talk)
                <div class="@if ($loop->last) md:col-span-2 md:ml-25p @else md:col-span-1 @endif flex items-center text-left space-x-4 lg:space-x-6">
                    <img class="w-16 h-16 border-2 border-blueGray-400 rounded-full lg:w-20 lg:h-20"
                         src="{{ $talk->speaker->avatarUrl }}"
                         alt="Avatar von {{ $talk->speaker->firstName }} {{ $talk->speaker->lastName }}">
                    <div class="font-medium text-lg leading-6 space-y-1">
                        <p class="text-blueGray-200 m-0">{{ $talk->title }}</p>
                        <p class="text-blueGray-400 m-0">{{ $talk->speaker->firstName }} {{ $talk->speaker->lastName }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mx-auto max-w-xs space-y-2">
            <a href="{{ $page->upcomingOnlineMeetup->youtubeUrl }}" class="button">Auf YouTube ansehen</a>
            @if($page->upcomingOnlineMeetup->calendarBase64)
                <a href="{{ $page->upcomingOnlineMeetup->calendarBase64 }}"
                   class="block text-indigo-400 hover:text-indigo-500">Zum Kalender hinzufügen</a>
            @endif
        </div>

    </div>

    <h2 class="text-4xl">Social Media</h2>

    <p class="text-xl">Unterhalte dich mit anderen Entwicklern online.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($page->social as $platform)
            <a href="{{ $platform['url'] }}" rel="noopener"
               class="block p-4 rounded text-white hover:text-white hover:opacity-90 flex items-center"
               style="background: {{$platform['color']}};">
                <img src="/assets/img/social/{{ $platform['icon'] }}.svg" class="mr-4 h-6" alt="">
                <span class="block font-bold">
                    {{ $platform['title'] }}
                </span>
            </a>
        @endforeach
    </div>

    <hr>

    <h2 class="text-4xl">Lokale Meetups</h2>

    <p class="text-xl">Laravel Entwickler aus deiner Nähe kennenlernen.</p>

    <h3 class="text-2xl">🇩🇪 Deutschland</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($page->localMeetups->de as $group)
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
        @foreach($page->localMeetups->at as $group)
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
        @foreach($page->localMeetups->ch as $group)
            <a href="{{ $group['url'] }}" rel="noopener" class="block p-4 border bg-white hover:bg-gray-50 rounded">
                <span class="block font-bold">
                    {{ $group['title'] }}
                </span>
                <span class="block font-light text-xs text-gray-600">{{ $group['members'] }} Artisans</span>
            </a>
        @endforeach
    </div>

    @include('_components.newsletter-signup')

@stop
