<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Boo;

class BookController extends Controller
{
    public function index()
{
    // Return a view or logic for the index page
    return view('Book'); // Ensure this view exists in 'resources/views/booking-form.blade.php'
}

public function showForm()
{
    $services = Service::all();
    dd($services); // Debugging line to check the services data
    return view('Book', compact('services'));
}

public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'service_id' => 'required|integer',
            'booking_date' => 'required|date',
            'booking_time' => 'required|date_format:H:i',
        ]);

        // Create a new booking record using the Book model
        //Book::create($validatedData);  This should reference the Book model correctly

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Booking successfully created!');
    }

}
