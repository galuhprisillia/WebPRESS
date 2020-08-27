<!DOCTYPE html>
<html>
<head>
    <!--/#head -->
    @include('includes.head')
</head>
<body class="light">
        @include('includes.loader')
    <!--/#app -->
    <div id="app">
        @yield('content')
    </div>
    <script src="../assets/js/app.js"></script>
</body>
</html>