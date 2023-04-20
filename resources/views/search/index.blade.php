@extends('layouts.main')
@section('content')

    <div class="container">
        <h3 class="mb-3 mt-3">Search</h3>

        <form
            action="{{route('search.show')}}"
            method="get">
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput12" class="form-label">Search</label>
                <input
                    name="title" type="text" class="form-control" id="exampleFormControlInput12">
            </div>



            <button type="submit" class="btn btn-primary mt-4">search</button>
        </form>
    </div>

@endsection
