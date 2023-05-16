<header>
    <nav class="container">
        <div id="logo">
            <a href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo DC Comics">
            </a>
        </div>

        <ul>
            <li>
                <a href="">Characters</a>
            </li>
            <li class="active">
                <a href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li>
                <a href="">Movies</a>
            </li>
            <li>
                <a href="">Tv</a>
            </li>
            <li>
                <a href="">Games</a>
            </li>
            <li>
                <a href="">Collectibles</a>
            </li>
            <li>
                <a href="">Videos</a>
            </li>
            <li>
                <a href="">Fans</a>
            </li>
            <li>
                <a href="">News</a>
            </li>
            <li>
                <a href="">Shop</a>
            </li>
        </ul>

        <div id="search-bar">
            <input type="text" placeholder="Search">
        </div>
    </nav>

    <div id="jumbo">
        <img src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="">
    </div>
</header>
