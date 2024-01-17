@extends('layouts.website')
@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf

        @error('name')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

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

        @error('role')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <select class="form-select" name="role" aria-label="Default select example">
            <option value="admin" selected>Admin</option>
            <option value="student">student</option>
        </select>

        @error('ph_number')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="ph_number">Phone Number</label>
            <input type="text" class="form-control" id="ph_number" name="ph_number">
        </div>

        @error('address')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
