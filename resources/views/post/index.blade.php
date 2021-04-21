<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Trang danh sách bài viết </h1>
    <ul>
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
        @endif
        @foreach ($posts as $post)
            <li>
                <a href="">{{$post->title}}</a><br>
                {{-- <img src="{{url($post->thumbnail)}}" alt=""> --}}
                <p>{{$post->content}}</p>
            </li>
        @endforeach

    </ul>

</body>

</html>
