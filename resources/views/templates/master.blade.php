<!DOCTYPE html>
<html>
<head>
    <!--/#head -->
    @include('includes.head')
</head>
<body class="light">
    @if (Auth::guest())
        @include('includes.homepage')
    @else
        <!--/#loader -->
        @include('includes.loader')
    
        <!--/#app -->
        <div id="app">

            @include('includes.sidebar')

            @yield('content')

        </div>
        <script src="{{ asset('../assets/js/app.js') }}"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    @endif
</body>
</html>