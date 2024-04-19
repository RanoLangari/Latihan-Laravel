@extends('layouts.app')

@section('title', 'Edit Postingan')
@section('content')
    <div class="container">
        <h2 class="mb-4">Edit Postingan</h2>
        <form action="{{ url("posts/$posts->id/edit") }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $posts->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea class="form-control" id="content" name="content" rows="3" required>{{ $posts->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
@endsection
