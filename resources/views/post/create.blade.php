<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Thêm bài viết</h1>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        {!! Form::open(['url' => 'post/store', 'method' => 'POST','files'=>true]) !!}
        <div class="form-group">

            {!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Tiêu đề']) !!}
            @error('title')
            <small class="text-danger form-text">
                {{$message}}
            </small>
            @enderror
        </div>
        <div class="form-group">

            {!! Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Nội dung']) !!}
            @error('content')
            <small class="text-danger form-text">
                {{$message}}
            </small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::file('file', ['class'=>'form-control-file']) !!}
        </div>
        <div class="form-group">

            {!! Form::submit('Thêm mới', ['class' => 'btn btn-primary', 'name' => 'sm-add']) !!}

        </div>
        {!! Form::close() !!}

    </div>

</body>

</html>
