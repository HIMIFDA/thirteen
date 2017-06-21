<html>
    <head>
        <title>Dashboard - HIMIFDA</title>
    </head>
    <body>
        <h1><a href="{{ route('dashboard-index') }}">Hello</a></h1>
        | <a href="{{ route('blog-index') }}">Blog</a> | 
        | <a href="">People</a> | 
        | 
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        |
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>