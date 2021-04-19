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
        <h1>Đăn ký</h1>

        {!! Form::open(['url' => 'user/store', 'method' => 'post']) !!}
        <div class="form-group">

            {!! Form::label('username', 'Tên đăng nhập') !!}

            {!! Form::text('username', '', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">

            {!! Form::label('password', 'Mật khẩu') !!}

            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">

            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', '', ['class' => 'form-control']) !!}

        </div>
        <div class="form-group">

            {!! Form::label('city', 'Thành phố') !!}
            {!! Form::select('city', [0 => 'Chọn', 1 => 'Hà Nội', 2 => 'TP.HCM', 3 => 'Đà Nẵng'], 2, ['class' => 'form-control']) !!}

        </div>
        <div class="form-group">

            {!! Form::label('gender', 'Giới tính') !!}
            <div class="form-check">
                {!! Form::radio('gender', 'male', 'checked', ['class'=>'form-check-input','id'=>'male']) !!}
                {!! Form::label('male', 'Nam', ['class'=>'form-check-lable']) !!}
            </div>
            <div class="form-check">
                {!! Form::radio('gender', 'female', '', ['class'=>'form-check-input','id'=>'female']) !!}
                {!! Form::label('female', 'Nữ', ['class'=>'form-check-lable']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('skills', 'Kĩ Năng') !!}
            <div class="form-check">
                {!! Form::checkbox('skill', 'Html', '', ['class'=>'form-check-input','id'=>'Html']) !!}
                {!! Form::label('Html', 'Html', ['class'=>'form-check-lable']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skill', 'Css', '', ['class'=>'form-check-input','id'=>'Css']) !!}
                {!! Form::label('Css', 'Css', ['class'=>'form-check-lable']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skill', 'PHP', '', ['class'=>'form-check-input','id'=>'PHP']) !!}
                {!! Form::label('PHP', 'PHP', ['class'=>'form-check-lable']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('bỉth', 'Ngày sinh') !!}
            {!! Form::date('bỉth', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('intro', 'Giới thiệu bản thân') !!}
            {!! Form::textarea('intro', '', ['class'=>'form-control','id'=>'intro']) !!}
        </div>
        <div class="form-group">

            {!! Form::submit('Đăng ký', ['class' => 'btn btn-primary', 'name' => 'sm-reg']) !!}

        </div>
        {!! Form::close() !!}

    </div>

</body>

</html>
