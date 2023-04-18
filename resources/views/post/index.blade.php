@extends('layouts.main')
@section('content')

    <div class="container">
        <h3 class="mb-3 mt-3">My posts</h3>
        @foreach($posts as $post)
            <ul>
                <a style='text-decoration: none; color: #1a202c' href="{{route('post.show', $post->id)}}">
                <li>{{$post->title}}</li>
                <p>{{$post->content}}</p></a>
            </ul>

        @endforeach

    </div>

@endsection
