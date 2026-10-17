
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Sphare Simulator')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    {{-- Existing global styles --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/remote-control.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    {{-- Page-specific styles --}}
    @stack('styles')
</head>

<body>

    {{-- Common navbar --}}
    @include('partials.navbar')

    {{-- Individual page content --}}
    @yield('content')

    {{-- Common footer --}}
    @include('partials.footer')

    {{-- Common JavaScript --}}
    <script src="{{ asset('js/footer.js') }}" defer></script>

    {{-- Page-specific JavaScript --}}
    @stack('scripts')

</body>
</html>
