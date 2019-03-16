@extends('layouts.app')

@section('content')
    <div class="container animated fadeIn delay-.9s">
        <div class="row justify-content-center m-5">
            <div class="col col-login mx-auto">
                <form method="POST" action="{{  route('password.email') }}" class="card">
                    @csrf
                    <div class="card-body">

                        <div class="card-title text-center">
                                <h4>{{ __('Reset Password') }}</h4>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email"
                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                            value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Send Password Reset Link') }}
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
