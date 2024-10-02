@extends('layouts.app')

@section('content')
    <h1>Bloglar</h1>
    <ul>
        @foreach ($blogs as $blog)
            <li>{{ $blog->title }}</li>
        @endforeach
    </ul>
@endsection
