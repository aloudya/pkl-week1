@extends('layouts.app')

@section('title', '')

@section('content')
<div class="container-md mt-3">

    <h1>Show Post</h1>
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>
    <a href="{{ route('posts.index') }}"></a>All posts</a>
</div>
@endsection