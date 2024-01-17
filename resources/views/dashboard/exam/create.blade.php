@extends('layouts.dashboard')
@section('content')
    <form action="{{ route('exam.store') }}" method="post">
        @csrf

        @error('title')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="" class="form-control" id="title" name="title">
        </div>

        @error('start_date')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="start-date">Start Date</label>
            <input type="datetime-local" value="{{ date('20y-m-d') . 'T10:30' }}" class="form-control" id="start-date"
                name="start_date">
        </div>

        @error('end_date')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="end-date">End Date</label>
            <input type="datetime-local" value="{{ date('20y-m-d') . 'T11:00' }}" class="form-control" id="end-date"
                name="end_date">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
@endsection
