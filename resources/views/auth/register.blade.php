@extends('layouts.website')
@section('content')
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        {{-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="admin" name="role[]" value="admin">
            <label class="form-check-label" for="admin">Admin</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="student" name="role[]" value="student">
            <label class="form-check-label" for="student">Student</label>
        </div> --}}


        <select class="form-select" name="role" aria-label="Default select example">
            <option value="admin" selected>Admin</option>
            <option value="student">student</option>
        </select>

        <div class="form-group">
            <label for="ph_number">Phone Number</label>
            <input type="text" class="form-control" id="ph_number" name="ph_number">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
