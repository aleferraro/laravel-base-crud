@extends('layouts.main')

@section('title', 'Bookings')

@section('content')
    <main>
        <div class="container">
            <h1>Prenotazione avvenuta con successo</h1>
            <a href="{{ route('booking.index') }}"> Ritorna alla home </a>
        </div>
    </main>
@endsection