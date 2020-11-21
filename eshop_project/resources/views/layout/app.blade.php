<!doctype html>
<html lang="sk">
<head>
    @include('layout.partials.head')
</head>

<body>
    @include('layout.partials.nav')
  
    <main role="main" class="container">
                    @yield('content')
    </main>
  
    <!-- Bootstrap core JavaScript -->
    @include('layout.partials.footer');
</body>
</html>  