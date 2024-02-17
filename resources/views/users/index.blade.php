@extends('layouts.main')

@section('title', 'User List')

@section('content')
    <h1>User List</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Posts Count</th> <!-- Add this column -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->posts_count }}</td> <!-- Display the posts_count -->
                <td>
                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">View</a>
                    <!-- Add other actions like Edit and Delete -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
