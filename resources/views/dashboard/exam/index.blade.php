@extends('layouts.dashboard')
@section('content')
    @if (Session::has('message'))
        <div class="alert-secondary my-1" id="message" onclick="this.style.display='none';">
            {{ Session::get('message') }}
        </div>
    @endif
    <a href="{{ route('exam.create') }}" class="btn btn-primary my-2">Add Exam</a>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Start In</th>
                    <th scope="col">End In</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($exams as $exam)
                    <tr>
                        <th scope="row">{{ $loop->index }}</th>
                        <td>{{ $exam->title }}</td>
                        <td>{{ $exam->start_date }}</td>
                        <td>{{ $exam->end_date }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('exam.edit', [$exam]) }}" class="btn btn-warning btn-sm">update</a>
                                <form action="{{ route('exam.destroy', [$exam]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
