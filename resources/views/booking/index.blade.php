@extends('layouts.main')

@section('title', 'Bookings')
    

@section('content')

    <main>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        @foreach ($columns as $column => $col_val)
                            <th scope="col">{{ $col_val }}</th>
                        @endforeach
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <th scope="row">{{ $booking->id }}</th>
                            <td>{{ $booking->guest_full_name }}</td> 
                            <td>{{ $booking->room }}</td> 
                            <td><a href="{{ route('booking.show', $booking->id ) }}">Vedi Dettagli</a></td>
                            <td><a href="{{ route('booking.edit', $booking->id ) }}">Modifica Prenotazione</a></td>
                            <td>
                                <form action="{{ route('booking.destroy', $booking->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Elimina Prenotazione</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection