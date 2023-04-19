@extends('layouts.main')
@section('content')

    <div class="container">
        <h3 class="mb-3 mt-3">update post!</h3>

        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label"> Update Title</label>
            <input value="{{$post->title}}" name="title" type="text" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Update Content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$post->content}}</textarea>
        </div>

            <label class="mb-2" for="cat">Category</label>
            <select name="category_id" id="cat" class="form-select" aria-label="Default select example">

                @foreach($categories as $cat)
                    <option
                           value="{{$cat->id}}">{{$cat->title}}</option>

                @endforeach

            </select>


        <button type="submit" class="btn btn-primary mt-4">Update</button>
        </form>


    </div>


@endsection
