@extends('layouts.dashboard')
@section('content')
    <a href="{{ route('exam.index', []) }}">
        <h1>Exams</h1>
    </a>
    <a href="{{ route('student.index', []) }}">
        <h1>Students</h1>
    </a>
@endsection
