<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>{{ $title ?? 'presto.it'}}</title>

    {{-- Utilizzo VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{$style ?? ''}}
    @livewireStyles
</head>
<body>

    <x-navbar />
    {{ $slot }}
    <x-footer />

    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>
    {{$script ?? ''}}
</body>
</html>