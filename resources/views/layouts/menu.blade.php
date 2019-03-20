<div class="header py-4">
    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="{{ url('/') }}">
                Tutoring
                <!--<img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">-->
                
            </a>

            @auth
            <div class="ml-auto dropdown">
                <a href="#" class="nav-link pr-0 leading-none" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="avatar" style="background-image: url({{ URL::asset('assets/images/utility/user.png') }})"></span>
                    <span class="ml-2 d-none d-lg-block">
                        <span class="text-default">{{ Auth::user()->name }}</span>
                        <small class="text-muted d-block mt-1">{{ Auth::user()->role }}</small>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <i class="dropdown-icon fe fe-log-out"></i> {{ __('Logout') }}
                    </a>
                </div>
            </div>

            @endauth

            @guest
            <div class="ml-auto d-md-flex">

                <div class="nav-item">
                    <a href="{{ route('login') }}">
                        <i class="fe fe-lock"></i>{{ __('Login') }}
                    </a>
                    
                </div>

                <div class="nav-item">
                    <a href="{{ route('register') }}"><i class="fe fe-edit-2"></i>
                        {{ __('Register') }}
                    </a>
                        
                </div>

                @if($convocatory)
                    <div class="nav-item ">
                        <a href="{{ route('register.tutor') }}">
                            <i class="fe fe-edit-2 "></i>{{ __('T. Register') }} 
                        </a>
                    </div>
                @endif

            </div>

            @endguest
        </div>
    </div>
</div>