
<footer class="site-footer">
    <div class="footer-glow"></div>

    <div class="footer-container">
        <div class="footer-top">

            <div class="footer-brand">
                <div class="footer-brand-main">
                    <div class="footer-logo">S</div>

                    <div>
                        <strong>SPHARE SIMULATOR</strong>
                        <span>UNIVERSAL SIMULATION PLATFORM</span>
                    </div>
                </div>

                <p>
                    A modular web-based simulation platform for
                    vehicle control, telemetry, mission planning,
                    robotics and future simulation environments.
                </p>

                <div class="footer-status">
                    <span class="footer-status-dot"></span>
                    <span>Simulation Platform</span>
                </div>
            </div>

            <div class="footer-column">
                <h3>Platform</h3>
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ url('/remote-control') }}">Remote Control</a>
                <a href="{{ url('/telemetry') }}">Telemetry</a>
            </div>

            <div class="footer-column">
                <h3>Simulation</h3>
                <a href="{{ url('/mission-planner') }}">Mission Planner</a>
                <a href="{{ url('/maps') }}">Maps</a>
                <a href="{{ url('/gps') }}">GPS</a>
                <a href="{{ url('/analytics') }}">Analytics</a>
            </div>

            <div class="footer-column">
                <h3>System</h3>
                <a href="{{ url('/weather') }}">Weather</a>
                <a href="{{ url('/failsafe') }}">Failsafe</a>
                <a href="{{ url('/settings') }}">Settings</a>
                <a href="{{ url('/about') }}">About</a>
            </div>

            <div class="footer-system">
                <h3>Platform Information</h3>

                <div class="system-item">
                    <span>Product</span>
                    <strong>Simulator</strong>
                </div>

                <div class="system-item">
                    <span>Architecture</span>
                    <strong>Laravel</strong>
                </div>

                <div class="system-item">
                    <span>Interface</span>
                    <strong>WEB</strong>
                </div>

                <div class="system-item">
                    <span>Version</span>
                    <strong>v1.0.0</strong>
                </div>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-middle">
            <div class="footer-meta">
                <span>
                    <span class="meta-label">Platform</span>
                    Sphare Simulator
                </span>

                <span>
                    <span class="meta-label">Architecture</span>
                    Modular
                </span>

                <span>
                    <span class="meta-label">Interface</span>
                    Web
                </span>
            </div>

            <button
                type="button"
                class="back-to-top"
                id="backToTop"
                aria-label="Back to top"
            >
                <span>↑</span>
                Back to Top
            </button>
        </div>

        <div class="footer-bottom">
            <div class="footer-copyright">
                © <span id="footerYear"></span>
                Sphare Simulator. All rights reserved.
            </div>

            <div class="footer-bottom-links">
                <a href="{{ url('/about') }}">About</a>
                <span>•</span>
                <a href="{{ url('/settings') }}">Settings</a>
            </div>

            <div class="footer-build">
                <span class="build-dot"></span>
                Simulation Interface
            </div>
        </div>
    </div>
</footer>
