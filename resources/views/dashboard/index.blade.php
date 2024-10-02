@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Blogs</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Başlıq</th>
                <th>Yazı</th>
                <th>Tarix</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->id }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->content }}</td>
                <td>{{ $blog->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
