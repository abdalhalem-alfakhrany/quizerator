@extends('layouts.dashboard')
@section('content')
    <form action="{{ route('exam.update', [$exam]) }}" method="post">
        @csrf
        @method('PUT')

        @error('title')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{ $exam->title }}" class="form-control" id="title" name="title">
        </div>

        @error('start_date')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="start-date">Start Date</label>
            <input type="datetime-local" value="{{ $exam->start_date }}" class="form-control" id="start-date"
                name="start_date">
        </div>

        @error('end_date')
            <span class="alert-danger">{{ $message }}</span>
        @enderror
        <div class="form-group">
            <label for="end-date">End Date</label>
            <input type="datetime-local" value="{{ $exam->end_date }}" class="form-control" id="end-date" name="end_date">
        </div>

        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
@endsection
