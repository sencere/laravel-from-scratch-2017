@extends('layouts.master')

@section('content')

<div class="col-md-8">
    <h1>Sign In</h1>
   <div class="form-group"> 
        <form method="POST" action="/login">
            @csrf
            <div class="form-group">
                <label form="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label form="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
        </form>
    </div>

    @include('layouts.errors')

</div>
@endsection
