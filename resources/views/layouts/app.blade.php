<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="¡HyperCode! Lugar de aprendizaje, sumergete en una lluvia de aprendizaje que te ayudara en tu dia a dia">
        <meta name="keywords" content="hypercode, courses, cursos, aprendizaje, aprender, code, hyper, cursos en linea">
        <meta name="author" content="HyperCode">
        <meta name="copyright" content="HyperCode">
        <meta name="theme-color" content="#A406FF">
        <link rel="shortcut icon" href="{{asset('img/logos/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('img/logos/favicon.ico')}}" type="image/x-icon">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
            {{$js}}
        @endisset
    </body>
</html>
