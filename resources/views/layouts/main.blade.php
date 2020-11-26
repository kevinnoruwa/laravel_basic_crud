


<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
        <title> @yield('title')</title>
    </head>
    <body>
        <div class="container">

        </div>
        <header>
            <nav>
                <a href="/">Home</a>
                <a href="/post/create">Create blog</a>
                <a href="">search</a>
                <a href="">contact</a>
            </nav>
        </header>
        {{-- <div class="container">
            @section('sidebar')
            This is the master sidebar.
            @show
            
        </div> --}}
      

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>