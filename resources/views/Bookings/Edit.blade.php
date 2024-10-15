@extends('layout')

@section('content')
    <h1>Edit Booking</h1>
    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" value="{{ $booking->full_name }}" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" value="{{ $booking->email }}" required><br>

        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" value="{{ $booking->phone_number }}" required><br>

        <label for="departure_date_time">Departure Date/Time:</label>
        <input type="datetime-local" name="departure_date_time" value="{{ $booking->departure_date_time }}" required><br>

        <label for="return_date_time">Return Date/Time:</label>
        <input type="datetime-local" name="return_date_time" value="{{ $booking->return_date_time }}" required><br>

        <label for="pickup_address">Pickup Address:</label>
        <textarea name="pickup_address" required>{{ $booking->pickup_address }}</textarea><br>

        <label for="destination_address">Destination Address:</label>
        <textarea name="destination_address" required>{{ $booking->destination_address }}</textarea><br>

        <label for="journey_type">Journey Type:</label>
        <select name="journey_type" required>
            <option value="one_way
