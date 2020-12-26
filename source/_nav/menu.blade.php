<nav class="hidden lg:flex items-center justify-end text-lg">
    @foreach($page->navigation as $navItem)
    <a href="{{ $navItem['url'] }}"
        class="ml-6 text-gray-700 hover:text-blue-600">
        {{ $navItem['title'] }}
    </a>
    @endforeach
</nav>
