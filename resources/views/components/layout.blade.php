<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>{{ $title ?? 'presto.it'}}</title>

    {{-- Utilizzo VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{$style ?? ''}}
    @livewireStyles
</head>
<body>
    <x-loader/>
    <x-navbar />
    <x-navbar-2 />
    {{ $slot }}
    <x-footer />

    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>
    {{$script ?? ''}}
    <script>
        $(window).on("load", function(){
    $(".loader-wrapper").fadeOut("slow");
    });
    </script>
    
</body>
</html>