@extends('layouts.main')
@section('content')

    <div class="container">
        <h3 class="mb-3 mt-3">create new posts!</h3>

        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input

                    value="{{old('title')}}"
                    name="title" type="text" class="form-control" id="exampleFormControlInput1">

                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea
                    value="{{old('content')}}"
                    name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


            <label class="mb-2" for="cat">Category</label>
            <select name="category_id" id="cat" class="form-select" aria-label="Default select example">

                @foreach($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->title}}</option>

                @endforeach

            </select>

            <button type="submit" class="btn btn-primary mt-4">create post</button>
        </form>


    </div>

@endsection
