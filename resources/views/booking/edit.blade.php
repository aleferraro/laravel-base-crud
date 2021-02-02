@extends('layouts.main')

@section('title', 'Aggiorna Prenotazione')

@section('content')
    
    <main>
        <div class="container">
            <form action="{{ route('booking.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="guest">Ospite</label>
                    <input type="text" class="form-control" id="guest" name="guest_full_name" placeholder="Nome, Cognome" value="{{ $booking['guest_full_name'] }}">
               </div>
                <div class="form-group">
                    <label for="credit-card">Carta di Credito</label>
                    <input type="text" class="form-control" id="credit-card" name="guest_credit_card" placeholder="Carta di Credito" value="{{ $booking['guest_credit_card'] }}">
                </div>
                <div class="form-group">
                    <label for="room">Stanza</label>
                    <input type="text" class="form-control" id="room" name="room" placeholder="Stanza" value="{{ $booking['room'] }}">
                </div>
                <div class="form-group">
                    <label for="from-date">Dal</label>
                    <input type="text" class="form-control" id="from-date" name="from_date" placeholder="Dal" value="{{ $booking['from_date'] }}">
                </div>
                <div class="form-group">
                    <label for="to-date">Al</label>
                    <input type="text" class="form-control" id="to-date" name="to_date" placeholder="Al" value="{{ $booking['to_date'] }}">
                </div>
                <div class="form-group">
                    <label for="details">Dettagli Prenotazione</label>
                    <textarea class="form-control" id="details" name="more_details" rows="3">{{ $booking['more_details'] }}"</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Modifica Prenotazione</button>
            </form>
        </div>
    </main>


@endsection