<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('main');
    }


    public function getAllBooking()
    {
        // We'd normally get the bookings list from the database.
        // We'll just return a default list for the prototype.
        return response()->json(
            [
                [
                    'name' => 'Amanda Joy',
                    'date' => 'Jan 02 2019',
                    'time' => '10:00am',
                    'message' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd.',
                ],
                [
                    'name' => 'John Smith',
                    'date' => 'Feb 05 2019',
                    'time' => '10:00am',
                    'message' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
                ]
            ]
        );
    }


    public function createBooking(Request $request)
    {
        $validatedData = $request->validate([
            'bookingName' => ['required', 'string'],
            'bookingDate' => ['required', 'date', 'date_format:Y-m-d', 'after:yesterday'],
            'bookingTime' => ['required', 'date_format:h:i A'],
            'bookingMessage' => ['required', 'string']
        ]);

        $bookingSchedule = Carbon::createFromFormat('Y-m-d h:i A', $request->input('bookingDate') . ' ' . $request->input('bookingTime'));

        // We would normally save the booking to the database.
        // For this prototype, we'll let our state management handle it.
        return response()->json([
            'name' => $request->input('bookingName'),
            'date' => date('M d Y', $bookingSchedule->getTimestamp()),
            'time' => date('g:ia', $bookingSchedule->getTimestamp()),
            'message' => $request->input('bookingMessage')
        ]);
    }
}
