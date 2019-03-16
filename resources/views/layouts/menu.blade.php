<nav class="navbar navbar-expand-lg navbar-light animated fadeIn delay-.8s" style="background-color: #fff;">
    <a class="header-brand" href="{{ url('/') }}">
        Tutoring
        <!--<img src="./demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">-->
        
    </a>
    @auth
    <div class="ml-auto dropdown">
        <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
            <span class="avatar" style="background-image: url(./assets/images/utility/user.png)"></span>
            <span class="ml-2 d-none d-lg-block">
                <span class="text-default">{{ Auth::user()->name }}</span>
                <small class="text-muted d-block mt-1">{{ Auth::user()->rol }}</small>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-user"></i> Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-settings"></i> Settings
            </a>
            <a class="dropdown-item" href="#">
                <span class="float-right"><span class="badge badge-primary">6</span></span>
                <i class="dropdown-icon fe fe-mail"></i> Inbox
            </a>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-send"></i> Message
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <i class="dropdown-icon fe fe-help-circle"></i> Need help?
            </a>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link"><i class="fe fe-lock"></i>
                        {{ __('Login') }}</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link"><i class="fe fe-edit-2"></i>
                        {{ __('Register') }}</a>
                </li>
            </ul>
                
        </div>
    
    @endguest

    

 </nav>

