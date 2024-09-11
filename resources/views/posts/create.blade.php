@extends('layouts.app')

@section('title', 'Create post')

@section('content')
<div class="container-md mt-3">
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="my-4">
        @csrf
        <div class="my-3 w-50">
            <label for="title" class="h5">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Your Title..." required>
        </div>
        <div>
            <label for="body" class="h5">Body</label>
            <textarea name="body" id="body" class="form-control" rows="12" placeholder="Your Text here..."
                required></textarea>
        </div>
        <div class="my-3 w-25">
            <label for="id_user" class="h5">ID User</label>
            <input type="number" name="id_user" id="id_user" class="form-control" placeholder="ID User..." required>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
@endsection