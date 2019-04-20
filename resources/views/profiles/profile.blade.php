@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-8">
            <div class="card card-profile">
                <div class="card-header" style="background-image: url({{asset('assets/images/utility/cover_header.png')}});"></div>
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-link btn-block">Change Photo</button>
                        </div>
                        <div class="col-md-4">
                        </div>
                        </div>
                    <img onclick="/profile" class="card-profile-img" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                    <h3 class="mb-3 card-title">{{ Auth::user()->name }}</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary btn-block">Edit profile</button>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <h4>Information: </h4>
                    <h5 class="card-text"><i class="icon-envelope-open"></i> {{ Auth::user()->email }} </h5>
                    <h5 class="card-text"><i class="icon-badge"></i> {{ Auth::user()->roles->first()->description }} </h5>
                <hr>
                    


                        
                    </div>

                    

                </div>
        </div>
    </div>
</div>

    
@endsection