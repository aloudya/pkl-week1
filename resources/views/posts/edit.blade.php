@extends('layouts.app')

@section('title', 'Edit post')

@section('content')
<div class="container-md mt-3">
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="my-4">
        @csrf
        @method('PUT')
        <div class="my-3 w-50">
            <label for="title" class="h5">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Your Title..."
                value="{{ $post->title }}" required>
        </div>
        <div>
            <label for="body" class="h5">Body</label>
            <textarea name="body" id="body" class="form-control" rows="12"
                placeholder="Your Text here...">{{ $post->body }}</textarea>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection