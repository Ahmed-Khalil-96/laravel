@extends('layouts.main')

@section('title', 'View Post')

@section('content')
    <h1>Post Details</h1>

    <div>
        <h3>Title: {{ $post->title }}</h3>
        <p>Body: {{ $post->body }}</p>
        <p>Author: {{ $post->user->name }}</p>
        <p>{{ $post->published_at ? $post->published_at->format('Y-m-d H:i:s') : 'N/A' }}</p>
    </div>
@endsection
