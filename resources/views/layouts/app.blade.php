<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sphare Simulator</title>
    
    <!-- Common Global CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar / Sidebar agar common hain -->
    @include('components.navbar')

    <div class="main-content">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>
</html>