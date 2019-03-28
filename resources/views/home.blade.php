@extends('layouts.app')

@section('content')
    @if (Auth::user()->status === 1)
        @if(Auth::user()->hasRole('admin'))
        <div>Admin</div>
        @elseif(Auth::user()->hasRole('tutor'))
        <div>Tutor</div>
        @else
        <div>Student</div>
        @endif
    @else
        @include('layouts.nouser')
    @endif
    

@endsection
