@extends('layouts.main')

@section('container')

<h1>Halaman Blog</h1>

@foreach ($posts as $post)
    <div class="mt-5">
        <h2>
            <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>Author : {{ $post["author"] }}</h5>
        <p>{{ $post["post"] }}</p>
    </div>
@endforeach

@endsection