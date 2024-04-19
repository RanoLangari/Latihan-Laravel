@extends('layouts.app')

@section('title', 'Tambah Postingan')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Tambah Postingan Baru</h2>
    <form action="{{ url('posts') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>
@endsection