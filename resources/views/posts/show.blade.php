<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ @asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ @asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Halaman Show</title>
</head>
<body>
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
            <h5 class="card-header">Kategori</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">Freebies</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">Tutorials</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>