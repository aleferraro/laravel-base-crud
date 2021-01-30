

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('booking.index') }}">My Hotel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Route::currentRouteName() == 'booking.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('booking.index') }}">Home</a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'booking.create' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('booking.create') }}">Aggiungi Prenotazione</a>
            </li>
        </ul>
    </div>
</nav>