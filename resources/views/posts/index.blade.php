@extends('layouts.app')

@section('title', 'Blog Saya')
@section('content')
<h1 class="text-center mt-5">Blog Latihan Laravel</h1>
<div class="container">
    {{-- modern button --}}
    <a href="{{ url('posts/create') }}" class="btn btn-primary">Tambah Postingan</a>
</div>
<div class="container mt-5">
    @foreach ($posts as $item)
        <div class="card mb-4">
            <div class="card-body mb-3">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->content }}</p>
                <p class="card-text"><small class="text-body-secondary">Terakhir diperbaharui pada
                        {{ date('d M Y H:i', strtotime($item->updated_at)) }}</small></p>
                <div class="justify-between">
                    <a href="{{ url("/posts/$item->id") }}" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url("/posts/$item->id/edit") }}" class="btn btn-warning">Edit Postingan</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#deleteModal-{{ $item->id }}">
                        Delete Posts
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus postingan ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form action="{{ url("/posts/$item->id)/delete") }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
    