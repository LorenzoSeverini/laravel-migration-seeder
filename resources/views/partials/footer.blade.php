<footer class="p-3">
    <nav class="navbar d-flex justify-content-center">
        <ul class="nav-links d-flex gap-3">
            @foreach ($links as $link)
                <li class="nav-link">
                    <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="text-center">
        <div class="d-flex justify-content-center gap-3 p-3">
            <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="text-center">
            <p>&copy; {{ date('Y') }} Trains App. All rights reserved.</p>
        </div>
    </div>

</footer>
