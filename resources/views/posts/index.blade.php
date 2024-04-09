<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ @asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ @asset('bootstrap-5/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .blog {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
    </style>
    <title>Blog</title>
</head>

<body>
    <h1 class="text-center mt-5">Blog Latihan Laravel</h1>
    <div class="container mt-5">
        @foreach ($posts as $item)
        @php
            $item = explode(",", $item);
        @endphp
            <div class="card mb-4">
                <div class="card-body mb-3">
                    <h5 class="card-title">{{ $item[1] }}</h5>
                    <p class="card-text">{{ $item[2] }}</p>
                    <p class="card-text"><small class="text-body-secondary">Terakhir diperbaharui pada {{ date("d M Y H:i", strtotime($item[3])) }}</small></p>
                    <a href="#" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>
</body>

</html>
