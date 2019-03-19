@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center animated fadeIn delay-.8s">Dashboard</h3>
    <div class="row text-center animated fadeIn delay-1s">
        <div class="col-sm-4">
            <a href="{{ route('convocatory.create') }}" class="btn btn-outline-primary btn-block"><i class="fa fa-calendar"></i>  Open call for tutors</a>
            <a href="#" class="btn btn-outline-primary btn-block"><i class="fa fa-book"></i> Create new division</a>
            <a href="#" class="btn btn-outline-primary btn-block"><i class="fa fa-graduation-cap"></i> Create new class</a>
            <a href="#" class="btn btn-outline-primary btn-block">pending</a>
        </div>
        <div class="col-sm-4">
            <a href="#" class="btn btn-outline-success btn-block"><i class="fa fa-wrench"></i>  Consult calls for tutors</a>
            <a href="#" class="btn btn-outline-success btn-block">pending</a>
            <a type="a" class="btn btn-outline-success btn-block">pending</a>
            <a href="#" class="btn btn-outline-success btn-block">pending</a>
        </div>
        <div class="col-sm-4">
            <a href="#" class="btn btn-outline-danger btn-block">pending</a>
            <a href="#" class="btn btn-outline-danger btn-block">pending</a>
            <a href="#" class="btn btn-outline-danger btn-block">pending</a>
            <a href="#" class="btn btn-outline-danger btn-block">pending</a>
        </div>
    </div>
</div>
@endsection