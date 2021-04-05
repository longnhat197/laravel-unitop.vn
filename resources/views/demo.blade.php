
{{-- @foreach ($users as $user)
    <p>{{$user['name']}}</p>
@endforeach --}}

@include('inc.comment',['title'=>'Comment bai viet'])
{{-- @php
    foreach ($users as $user) {
        # code...
        echo $user['name']."<br>";
    }
@endphp --}}

