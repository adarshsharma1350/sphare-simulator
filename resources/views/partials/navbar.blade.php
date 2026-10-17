<header class="topbar">
    <a href="{{ url('/home') }}" class="brand">
        <div class="logo">S</div>

        <div class="brand-info">
            <strong>SPHARE SIMULATOR</strong>
            <span>UNIVERSAL SIMULATION PLATFORM</span>
        </div>
    </a>

    <nav class="nav">
        <a href="{{ url('/home') }}"
           class="{{ request()->is('home') ? 'active' : '' }}">
            Home
        </a>

        <a href="{{ url('/dashboard') }}"
           class="{{ request()->is('dashboard') ? 'active' : '' }}">
            Dashboard
        </a>

        <a href="{{ url('/flight-control') }}"
           class="{{ request()->is('flight-control') ? 'active' : '' }}">
            Flight
        </a>

        <a href="{{ url('/telemetry') }}"
           class="{{ request()->is('telemetry') ? 'active' : '' }}">
            Telemetry
        </a>

        <a href="{{ url('/maps') }}"
           class="{{ request()->is('maps') ? 'active' : '' }}">
            Map
        </a>

        <a href="{{ url('/mission-planner') }}"
           class="{{ request()->is('mission-planner') ? 'active' : '' }}">
            Mission
        </a>

        <a href="{{ url('/mission-library') }}"
           class="{{ request()->is('mission-library') ? 'active' : '' }}">
            Library
        </a>

        <a href="{{ url('/gps') }}"
           class="{{ request()->is('gps') ? 'active' : '' }}">
            GPS
        </a>

        <a href="{{ url('/battery') }}"
           class="{{ request()->is('battery') ? 'active' : '' }}">
            Battery
        </a>

        <a href="{{ url('/failsafe') }}"
           class="{{ request()->is('failsafe') ? 'active' : '' }}">
            Failsafe
        </a>

        <a href="{{ url('/camera-fpv') }}"
           class="{{ request()->is('camera-fpv') ? 'active' : '' }}">
            FPV
        </a>

        <a href="{{ url('/gesture-control') }}"
           class="{{ request()->is('gesture-control') ? 'active' : '' }}">
            Gesture
        </a>

        <a href="{{ url('/analytics') }}"
           class="{{ request()->is('analytics') ? 'active' : '' }}">
            Analytics
        </a>

        <a href="{{ url('/weather') }}"
           class="{{ request()->is('weather') ? 'active' : '' }}">
            Weather
        </a>

        <a href="{{ url('/cli') }}"
           class="{{ request()->is('cli') ? 'active' : '' }}">
            CLI
        </a>

        <a href="{{ url('/settings') }}"
           class="{{ request()->is('settings') ? 'active' : '' }}">
            Settings
        </a>
    </nav>

    <div class="connection" id="connectionStatus">
        <span class="dot"></span>
        <span>MAVLink Status</span>
    </div>
</header>

