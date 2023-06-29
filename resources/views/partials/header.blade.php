<header class="p-3">
    <nav class="navbar">
        <a class="navbar-brand" target="_blank" href="https://www.nexi.it/it"><img src="{{ Vite::asset('/resources/img/logo.png') }}" class="img-fluid" style="width: 100px; height: 100px;" alt="Logo"></a>
        <ul class="nav-links">
            @foreach ($links as $link)
                <li class="nav-link">
                    <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
