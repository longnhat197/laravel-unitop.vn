@extends('layouts.app')
@section('title', 'Tiêu đề trang con')
@section('content')
    <p>Nội dung trang con</p>
    @isset($post_title)
        <p>Tiêu đề: {{$post_title}}</p>
    @endisset
    @empty($users)
        <p>Không có user nào</p>
    @endempty
    @if ($data % 2 == 0)
        <p>{{$data}} là số chẵn</p>
        @else
        <p>{{$data}} là số lẻ</p>
    @endif
@endsection

@section('sidebar')
    @parent
    <p>Side bar trang con</p>
@endsection
