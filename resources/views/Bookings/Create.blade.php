@extends('layout')

@section('content')
    <h1>Create Booking</h1>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" required><br>

        <label for="departure_date_time">Departure Date/Time:</label>
        <input type="datetime-local" name="departure_date_time" required><br>

        <label for="return_date_time">Return Date/Time:</label>
        <input type="datetime-local" name="return_date_time" required><br>

        <label for="pickup_address">Pickup Address:</label>
        <textarea name="pickup_address" required></textarea><br>

        <label for="destination_address">Destination Address:</label>
        <textarea name="destination_address" required></textarea><br>

        <label for="journey_type">Journey Type:</label>
        <select name="journey_type" required>
            <option value="one_way">One Way</option>
            <option value="round_trip">Round Trip</option>
        </select><br>

        <label for="number_of_passengers">Number of Passengers:</label>
        <input type="number" name="number_of_passengers" min="1" required><br>

        <label for="additional_message">Additional Message:</label>
        <textarea name="additional_message"></textarea><br>

        <button type="submit">Submit</button>
    </form>
@endsection
