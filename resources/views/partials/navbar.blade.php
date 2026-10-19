<header class="topbar" id="mainHeader">
    <a href="{{ url('/home') }}" class="brand">
        <div class="logo">S</div>

        <div class="brand-info">
            <strong>SPHARE SIMULATOR</strong>
            <span>UNIVERSAL SIMULATION PLATFORM</span>
        </div>
    </a>

    <nav class="nav" id="navLinks">
        <a href="{{ url('/home') }}" class="{{ request()->is('home') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ url('/maps') }}" class="{{ request()->is('maps') ? 'active' : '' }}">Map</a>
        <a href="{{ url('/mission-planner') }}" class="{{ request()->is('mission-planner') ? 'active' : '' }}">Mission</a>
        <a href="{{ url('/gesture-control') }}" class="{{ request()->is('gesture-control') ? 'active' : '' }}">Gesture</a>
        <a href="{{ url('/cli') }}" class="{{ request()->is('cli') ? 'active' : '' }}">CLI</a>
    </nav>

    <div class="header-actions">
        <!-- Interactive MAVLink Connection Badge -->
        <div class="connection connected" id="connectionStatus" title="Click to toggle simulation link">
            <span class="dot"></span>
            <span id="connectionText">MAVLink Connected</span>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button class="mobile-menu-btn" id="menuToggle" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Sticky Header effect on scroll
        const header = document.getElementById('mainHeader');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Interactive Connection Status Toggle
        const connectionBadge = document.getElementById('connectionStatus');
        const connectionText = document.getElementById('connectionText');
        let isConnected = true;

        connectionBadge.addEventListener('click', () => {
            isConnected = !isConnected;
            if (isConnected) {
                connectionBadge.classList.add('connected');
                connectionBadge.classList.remove('disconnected');
                connectionText.textContent = 'MAVLink Connected';
            } else {
                connectionBadge.classList.remove('connected');
                connectionBadge.classList.add('disconnected');
                connectionText.textContent = 'Simulator Offline';
            }
        });

        // Mobile Menu Toggle functionality
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('mobile-open');
                menuToggle.classList.toggle('active');
            });
        }
    });
</script>