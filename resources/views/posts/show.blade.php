@extends('layouts.app')

@section('title', 'judul:'. $posts->title)
@section('content')
<div class="container mt-5">
<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <img src="https://via.placeholder.com/750x300" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">{{$posts->title}}</h2>
                <p class="card-text">{{$posts->content}}</p>
                <a href="#" class="btn btn-primary">Baca Lebih Lanjut</a>
            </div>
            <div class="card-footer text-muted">
                {{date('d M Y h:i', strtotime($posts->updated_at))}}
                <a href="#">Penulis</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card my-4">
            <h5 class="card-header">Cari</h5>
            <div class="card-body">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari...">
                    <span class="input-group-append">
                        <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
        <div class="card my-4">
        <h5 class="card-header">Komentar</h5>
        <b class="text-sm">{{$total_comments}} komentar</b>
        <ul class="list-group list-group-flush">
            @foreach($comments as $comment)
                <li class="list-group-item">{{$comment->comment}}</li>
            @endforeach
        </ul>
        </div>
    </div>
</div>
</div>
@endsection