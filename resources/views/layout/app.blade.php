<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>

<body class="antialiased">
    <!-- ====== Navbar Section Start -->
    <x-layout.navbar></x-layout.navbar> 
    <!--======Navbar Section End -->
        {{$slot}}
    <footer>Footer</footer>

        <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>