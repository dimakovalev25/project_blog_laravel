@extends('layouts.main')
@section('content')
    <div class="container mt-3">

        <p>{{$post->title}}</p>
        <p>{{$post->content}}</p>

        <form action="{{route('post.edit', $post->id)}}">
            <input class="btn btn-warning mb-2" type="submit" value="edit post">
        </form>

        <form method="post" action="{{route('post.delete', $post->id)}}">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="delete post">
        </form>
    </div>

@endsection
