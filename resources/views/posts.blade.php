@extends('layouts.main')
@section('content')

<h1>posts! blade </h1>

@foreach($posts as $post)
    <p>{{$post->title}}</p>
@endforeach


@endsection
