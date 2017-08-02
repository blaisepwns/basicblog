<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Blog</a>
            <ul class="nav navbar-nav">
                @if (Auth::check())
                <li><a href="/home">Dashboard</a></li>
                @endif
                <li><a href="/">Posts</a></li>
                <li><a href="/users">Users</a></li>
            </ul>
            @if (Route::has('login'))
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
                </ul>
            @endif
            </div>
        </nav>

    @yield('content')
    
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>