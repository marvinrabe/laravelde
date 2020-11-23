@extends('_layouts.master')

@section('body')
    <h1 class="text-4xl">Hallo, 👋</h1>
    <p class="text-xl">dies ist die <strong>deutschsprachige</strong> Community für alle <strong>Laravel</strong>
        Entwickler. Ganz egal ob Anfänger oder Experte, du bist herzlich willkommen.</p>
    @include('_components.newsletter-signup')

    <h2 class="text-2xl">Meetups</h2>

    <p class="text-xl">Laravel Entwickler aus deiner Nähe kennenlernen.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($page->userGroups as $group)
            <a href="{{ $group['url'] }}" rel="noopener" class="block p-4 border rounded">
                <span class="block font-bold">
                    {{ $group['title'] }}
                </span>
                <span class="block font-light text-xs text-gray-600">{{ $group['members'] }} Artisans</span>
            </a>
        @endforeach
    </div>
@stop
