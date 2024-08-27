<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">FeedIT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('start')) active @endif" aria-current="page" href="/">Start</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('mitbestellen')) active @endif" aria-current="page" href="{{ route('mitbestellen') }}">Mitbestellen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('bestellungen')) active @endif" aria-current="page" href="{{ route('bestellungen') }}">Bestellungen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('lieferanten')) active @endif" aria-current="page" href="{{ route('lieferanten') }}">Lieferanten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(request()->routeIs('gerichte')) active @endif" href="{{ route('gerichte') }}">Gerichte</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
