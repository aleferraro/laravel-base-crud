@extends('layouts.main')

@section('title', 'Booking Details')


@section('content')

    <main>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    <h5 class="card-title">Prenotazione: #{{ $booking->id }}</h5>
                </div>
                <div class="card-body">
                    <div class="card-text"><strong>Ospite:</strong> {{ $booking->guest_full_name }}</div>
                    <div class="card-text"><strong>Stanza:</strong> {{ $booking->room }}</div>
                    <div class="card-text"><strong>Carta di Credito:</strong> {{ $booking->guest_credit_card }}</div>
                    <div class="card-text"><strong>Dal:</strong> {{ $booking->from_date }}</div>
                    <div class="card-text"><strong>Al:</strong> {{ $booking->to_date }}</div>
                    <p class="card-text">
                        <strong>Dettagli:</strong>
                        <br> {{ $booking->more_details }}
                    </p>
                </div>
            </div>
        </div>
    </main>

@endsection