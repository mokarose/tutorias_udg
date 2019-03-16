@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="text-center animated fadeIn delay-.8s">Dashboard</h3>
    <div class="row text-center animated fadeIn delay-1s">
        <div class="col-sm-4">
            <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-calendar-plus"></i>  Open call for tutors</button>
            <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-book"></i> Create new division</button>
            <button type="button" class="btn btn-outline-primary btn-block"><i class="fa fa-graduation-cap"></i> Create new class</button>
            <button type="button" class="btn btn-outline-primary btn-block">pending</button>
        </div>
        <div class="col-sm-4">
            <button type="button" class="btn btn-outline-success btn-block"><i class="fa fa-wrench"></i>  Consult calls for tutors</button>
            <button type="button" class="btn btn-outline-success btn-block">pending</button>
            <button type="button" class="btn btn-outline-success btn-block">pending</button>
            <button type="button" class="btn btn-outline-success btn-block">pending</button>
        </div>
        <div class="col-sm-4">
            <button type="button" class="btn btn-outline-danger btn-block">pending</button>
            <button type="button" class="btn btn-outline-danger btn-block">pending</button>
            <button type="button" class="btn btn-outline-danger btn-block">pending</button>
            <button type="button" class="btn btn-outline-danger btn-block">pending</button>
        </div>
    </div>
</div>
@endsection