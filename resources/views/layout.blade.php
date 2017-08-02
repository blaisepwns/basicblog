<html>
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Blog</a>
            <ul class="nav navbar-nav">
                <li><a href="/">Posts</a></li>
                <li><a href="/users">Users</a></li>
            </ul>
            @if (Route::has('login'))
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="{{ url('/home') }}">Home</a></li>
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

    
</body>
</html>