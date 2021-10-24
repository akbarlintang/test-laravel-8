@extends('layouts.main')

@section('container')

<div class="mt-5">
    <h2>{{ $post["title"] }}</h2>
    <h5>Author : {{ $post["author"] }}</h5>
    <p>{{ $post["post"] }}</p>

    <a href="/blog">Kembali ke blog</a>
</div>

@endsection