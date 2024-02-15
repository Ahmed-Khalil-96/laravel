@extends('layouts.main')

@section('title', 'User Details')

@section('content')
<div class="mt-4">
    <h1>User Details</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Email Verified At</th>
                <td>{{ $user->email_verified_at }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection



