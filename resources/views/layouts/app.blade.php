<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

     <link rel="stylesheet" href="{{asset('css/home.css')}}">
     <link rel="stylesheet" href="{{asset('css/about.css')}}">
     <link rel="stylesheet" href="{{asset('css/contact.css')}}">

     


   
</head>
<body class="bg-light text-center p-5">

    @yield('content')


    @yield('scripts')
    <!-- Bootstrap JS (CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
</body>
</html>