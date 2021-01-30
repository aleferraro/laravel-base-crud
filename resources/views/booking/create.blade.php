@extends('layouts.main')

@section('title', 'New Booking')

@section('content')

    <main>
        <div class="container">
            <form method="POST" action="{{ route('booking.store') }}">
                @csrf
                <div class="form-group">
                    <label for="guest">Ospite</label>
                    <input type="text" class="form-control" id="guest" name="guest_full_name" placeholder="Nome, Cognome">
                </div>
                <div class="form-group">
                    <label for="credit-card">Carta di Credito</label>
                    <input type="text" class="form-control" id="credit-card" name="guest_credit_card" placeholder="Carta di Credito">
                </div>
                <div class="form-group">
                    <label for="room">Stanza</label>
                    <input type="text" class="form-control" id="room" name="room" placeholder="Stanza">
                </div>
                <div class="form-group">
                    <label for="from-date">Dal</label>
                    <input type="text" class="form-control" id="from-date" name="from_date" placeholder="Dal">
                </div>
                <div class="form-group">
                    <label for="to-date">Al</label>
                    <input type="text" class="form-control" id="to-date" name="to_date" placeholder="Al">
                </div>
                <div class="form-group">
                    <label for="details">Dettagli Prenotazione</label>
                    <textarea class="form-control" id="details" name="more_details" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi Prenotazione</button>
            </form>
        </div>
    </main>

@endsection