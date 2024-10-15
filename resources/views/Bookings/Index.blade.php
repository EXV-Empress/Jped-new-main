@extends('layout')

@section('content')
    <h1>Bookings</h1>
    <a href="{{ route('bookings.create') }}">Create Booking</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Departure</th>
                <th>Return</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->full_name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone_number }}</td>
                    <td>{{ $booking->departure_date_time }}</td>
                    <td>{{ $booking->return_date_time }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking->id) }}">View</a>
                        <a href="{{ route('bookings.edit', $booking->id) }}">Edit</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
