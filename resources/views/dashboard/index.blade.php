@extends('layouts.dashboard')
@section('content')
    <a href="{{ route('exam.index', []) }}">
        <h1>Exams</h1>
    </a>
@endsection
