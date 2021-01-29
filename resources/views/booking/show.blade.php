@extends('layouts.main')

@section('title', 'Booking Details')


@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <h5 class="card-title">Booking: #{{ $booking->id }}</h5>
        </div>
        <div class="card-body">
            <div class="card-text"><strong>Guest:</strong> {{ $booking->guest_full_name }}</div>
            <div class="card-text"><strong>Room:</strong> {{ $booking->room }}</div>
            <div class="card-text"><strong>Credit Card:</strong> {{ $booking->guest_credit_card }}</div>
            <div class="card-text"><strong>From Date:</strong> {{ $booking->from_date }}</div>
            <div class="card-text"><strong>To Date:</strong> {{ $booking->to_date }}</div>
            <p class="card-text">
                <strong>Details:</strong>
                <br> {{ $booking->more_details }}
            </p>
        </div>
    </div>
@endsection