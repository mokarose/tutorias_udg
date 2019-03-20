@extends('layouts.app')

@section('content')
    <div class="container animated fadeIn delay-.9s">
        <div class="row justify-content-center m-5">
            <div class="col col-login mx-auto">
                
                <form method="POST" action="{{ route('register.tutor') }}" class="card">
                    @csrf
                    <div class="card-body">

                        <div class="card-title text-center">
                            <h4>{{ __('Tutor Register') }}</h4>
                        </div>

                        @if(session()->has('Registered'))
                            <div class="form-group">
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('Registered') }}
                                </div>
                            </div>
                        @endif
                        @if($convocatory)
                            <div class="form-group">
                                <label for="text_convocatoria" class="col-form-label">{{ __('Convocatory: ') }}</label>   
                                <textarea class="form-control" name="text_convocatoria" id="text_convocatoria" cols="30" rows="2" disabled style="resize: none;">{{$convocatory->written}}</textarea>
                            </div>
                        @endif

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name" class="col-form-label">{{ __('Name') }}</label>
                            <input id="name" type="text"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>

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

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password" class="col-form-label">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                value="{{ old('password') }}" required autofocus>
    
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <!-- Password Confirm -->
                        <div class="form-group">
                            <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password"
                                class="form-control{{ $errors->has('password-confirm') ? ' is-invalid' : '' }}" name="password_confirmation"
                                value="{{ old('password-confirm') }}" required autofocus>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
