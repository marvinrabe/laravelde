<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        @foreach($page->navigation as $navItem)
        <li class="pl-4">
            <a href="{{ $navItem['url'] }}" class="nav-menu__item hover:text-blue-500">
                {{ $navItem['title'] }}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
