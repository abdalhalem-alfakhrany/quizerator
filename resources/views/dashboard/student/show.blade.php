@extends('layouts.dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">Name</div>
            <div class="col-10">{{ $student->name }}</div>
        </div>
        <div class="row">
            <div class="col-2">Email</div>
            <div class="col-10">{{ $student->email }}</div>
        </div>
        <div class="row">
            <div class="col-2">Phone Number</div>
            <div class="col-10">{{ $student->ph_number }}</div>
        </div>
        <div class="row">
            <div class="col-2">Address</div>
            <div class="col-10">{{ $student->address }}</div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Exam Title</th>
                        <th>Start Attendence</th>
                        <th>End Attendence</th>
                        <th>result</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student->exams()->get(['title', 'end_attendance', 'start_attendance', 'result']) as $exam)
                        <tr>
                            <td>{{ $exam->title }}</td>
                            <td>{{ $exam->start_attendance }}</td>
                            <td>{{ $exam->end_attendance }}</td>
                            <td>{{ $exam->result }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
