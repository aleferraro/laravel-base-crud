<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

use App\Booking;



class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();

        $columns = [
            'id' => '#',
            'guest_full_name' => 'Ospite',
            'room' => 'Stanza',
        ];



        return view('booking.index', compact('bookings', 'columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'guest_full_name' => 'required|string|min:3',
            'guest_credit_card' => 'required|digits:16',
            'room' => 'required|integer',
            'from_date' => 'required|string',
            'to_date' => 'required|string',
            'more_details' => 'required|string'
        ]);


        $booking = new Booking;

        $booking->guest_full_name = $request->guest_full_name;
        $booking->guest_credit_card = $request->guest_credit_card;
        $booking->room = $request->room;
        $booking->from_date = $request->from_date;
        $booking->to_date = $request->to_date;
        $booking->more_details = $request->more_details;

        $booking->save();

        return view('booking.store');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);

        return view('booking.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {

        return view('booking.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'guest_full_name' => 'required|string|min:3',
            'guest_credit_card' => 'required|digits:16',
            'room' => 'required|integer',
            'from_date' => 'required|string',
            'to_date' => 'required|string',
            'more_details' => 'required|string'
        ]);
            
            
        $booking = Booking::find($id);

        $data = [
            'guest_full_name' => $request->guest_full_name,
            'guest_credit_card' => $request->guest_credit_card,
            'room' => $request->room,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
            'more_details' => $request->more_details
        ];


        $booking->update($data);


        return view('booking.show', compact('booking'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);

        return view('booking.destroy');
    }
}
