@extends('layouts.master')

@section('content')
    <h1>Publish a Post</h1>
    <hr />
    <form method="post" action="/posts">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
    </form>
    @include('layouts.errors')
@endsection
