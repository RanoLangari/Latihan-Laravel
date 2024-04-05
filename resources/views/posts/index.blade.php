<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{@asset('bootstrap-5/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{@asset('bootstrap-5/js/bootstrap.bundle.min.js')}}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .blog{
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
    </style>
    <title>Blog</title>
</head>
<body>
    <h1>Blog Latihan Laravel</h1>
   <div>
    @php
        $number = 1;
    @endphp
        @foreach ($posts as $item)
            <div class="blog">
                <h3>{{$item[0]}} <small>{{$number}}</small></h3>
                <p>{{$item[1]}}</p>
            </div>
        @php $number++; @endphp
        @endforeach
   </div>
</body>
</html> 