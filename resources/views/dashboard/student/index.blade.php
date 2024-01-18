@extends('layouts.dashboard')
@section('content')
    @if (Session::has('message'))
        <div class="alert-secondary my-1" id="message" onclick="this.style.display='none';">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td scope="row">{{ $loop->index }}</th>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->ph_number }}</td>
                        <td>{{ $student->exams()->sum('result') }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('student.show', [$student]) }}" class="btn btn-secondary btn-sm">show</a>
                                <a href="{{ route('student.edit', [$student]) }}" class="btn btn-warning btn-sm">update</a>
                                <form action="{{ route('student.destroy', [$student]) }}" method="post">
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
