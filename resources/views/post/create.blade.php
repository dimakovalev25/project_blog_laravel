@extends('layouts.main')
@section('content')

    <div class="container">
        <h3 class="mb-3 mt-3">create new posts!</h3>

        <form action="{{route('post.store')}}" method="post">
            @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">create post</button>
        </form>


    </div>


@endsection
