{{--<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #1b4b72">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand" href="{{ url('/') }}" style="color: white">--}}
{{--            UAS WEB PROG KENNY - 2201747640 - 08112310049--}}
{{--        </a>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="navbar-nav ml-auto">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @if(Auth::guard('web')->check())--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::guard('web')->user()->name }} <span class="caret"></span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a href="{{route('home')}}" class="dropdown-item">Dashboard</a>--}}
{{--                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">--}}
{{--                                Logout--}}
{{--                            </a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    @elseif(Auth::guard('admin')->check())--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="adminDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::guard('admin')->user()->name }} (ADMIN) <span class="caret"></span>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="adminDropdown">--}}
{{--                            <a href="{{route('admin.home')}}" class="dropdown-item">Dashboard</a>--}}
{{--                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">--}}
{{--                                Logout--}}
{{--                            </a>--}}
{{--                            <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--
{{--                @endif--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}


<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{Route('articlelist')}}">Home</a></li>

                @if(Auth::guard('web')->check())
                    <li><a class="nav-link scrollto" href="{{Route('addarticle')}}">Add Blog</a></li>
                    <li><a class="nav-link scrollto" href="{{Route('managearticle')}}">Manage Blog</a></li>
                    <li><a class="nav-link scrollto" href="{{Route('user.profile')}}">Edit Profile</a></li>
                    <li> <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                @elseif(Auth::guard('admin')->check())
                    <li><a class="nav-link scrollto" href="{{Route('admin.userlist')}}">View User</a></li>
                    <li> <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                            Logout
                        </a>
                        <form id="admin-logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else

                    <li><a class="getstarted scrollto active" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link scrollto active" href="{{ route('register') }}">Register</a></li>
                @endif

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
