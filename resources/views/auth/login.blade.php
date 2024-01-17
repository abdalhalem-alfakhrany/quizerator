@extends('layouts.website')
@section('content')
    <form action="{{ route('login') }}" method="post">
        @csrf

        @error('email')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        @error('password')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
