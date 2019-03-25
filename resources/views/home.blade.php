@extends('layouts.app')

@section('content')

    @if(Auth::user()->hasRole('admin'))
        <div>Admin</div>
    @elseif(Auth::user()->hasRole('tutor'))
        <div>Tutor</div>
    @else
        <div>Student</div>
    @endif

@endsection
