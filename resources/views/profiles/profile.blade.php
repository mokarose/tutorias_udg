@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-7">
                <div class="card">
                    <div class="row justify-content-center m-3">
                        <div class="col-md-4">
                            <img class="img-circle" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" width="140" height="140">
                        </div>
                    </div>
                    <div class="text-center">
                        <h2 class="card-title">{{ Auth::user()->name }}</h2>
                    </div>

                    <hr>
                    <div class="card-body">
                        <h4>Information: </h4>
                        <h5 class="card-text"><i class="icon-envelope-open"></i> {{ Auth::user()->email }} </h5>
                        <h5 class="card-text"><i class="icon-badge"></i> {{ Auth::user()->roles->first()->description }} </h5>

                        <hr>
                        <div class="row">
                                <div class="col-md-4">
                                    <button class="btn btn-success btn-block">Change Photo</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-primary btn-block">Edit profile</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-warning btn-block">X</button>
                                </div>
                        </div>
                    </div>

                    

                </div>
        </div>
    </div>
</div>

    
@endsection