@extends('layouts.app')

@section('title', 'Live Telemetry — Sphare Simulator')

@section('content')
<main class="main-container">

    <!-- Page Header -->
    <header class="section-heading reveal">
        <div>
            <div class="section-eyebrow">NAVIGATION &amp; ENVIRONMENT</div>
            <h1>Live <span class="text-highlight">Telemetry</span></h1>
            <p class="hero-description telemetry-hero-desc">
                Monitor real-time vehicle metrics, flight dynamics, sensor outputs, and MAVLink data streams.
            </p>
        </div>

        <div class="header-actions">
            <button type="button" class="btn btn-secondary" id="refreshTelemetry">
                ↻ Refresh Stream
            </button>
            <button type="button" class="btn btn-primary" id="exportTelemetry">
                ↓ Export Logs
            </button>
        </div>
    </header>


    <!-- Telemetry Stats Cards -->
    <section class="stats-section reveal">
        <div class="card stat-card">
            <div class="stat-icon text-blue">▲</div>
            <div>
                <span class="stat-label">Altitude (MSL)</span>
                <strong class="stat-value" id="telemetryAlt">142.8 m</strong>
                <span class="stat-sub">Barometric sensor</span>
            </div>
        </div>

        <div class="card stat-card">
            <div class="stat-icon text-cyan">⚡</div>
            <div>
                <span class="stat-label">Ground Speed</span>
                <strong class="stat-value" id="telemetrySpeed">14.2 m/s</strong>
                <span class="stat-sub">GPS velocity vector</span>
            </div>
        </div>

        <div class="card stat-card">
            <div class="stat-icon text-green">🔋</div>
            <div>
                <span class="stat-label">Battery Voltage</span>
                <strong class="stat-value" id="telemetryBattery">25.2 V</strong>
                <span class="stat-sub">6S LiPo (94% remaining)</span>
            </div>
        </div>

        <div class="card stat-card">
            <div class="stat-icon text-purple">◎</div>
            <div>
                <span class="stat-label">GPS Satellites</span>
                <strong class="stat-value" id="telemetrySats">18 Sats</strong>
                <span class="stat-sub">HDOP: 0.74 (Fix 3D)</span>
            </div>
        </div>
    </section>


    <!-- Detailed Telemetry Streams Section -->
    <section class="card reveal telemetry-details-card">
        <div class="section-heading telemetry-stream-header">
            <div>
                <h2>Active Data Streams</h2>
                <p class="telemetry-subtitle">Real-time packet logs received from the simulation bridge.</p>
            </div>
            <span class="badge">MAVLINK v2.0</span>
        </div>

        <div class="telemetry-table-wrapper">
            <table class="telemetry-table">
                <thead>
                    <tr>
                        <th>Parameter ID</th>
                        <th>Value</th>
                        <th>Unit</th>
                        <th>Status</th>
                        <th>Last Updated</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><code>ATTITUDE.roll</code></td>
                        <td><strong id="paramRoll">+0.04</strong></td>
                        <td>rad</td>
                        <td><span class="text-green">Stable</span></td>
                        <td class="text-muted">Just now</td>
                    </tr>
                    <tr>
                        <td><code>ATTITUDE.pitch</code></td>
                        <td><strong id="paramPitch">-0.01</strong></td>
                        <td>rad</td>
                        <td><span class="text-green">Stable</span></td>
                        <td class="text-muted">Just now</td>
                    </tr>
                    <tr>
                        <td><code>VFR_HUD.heading</code></td>
                        <td><strong id="paramHeading">214</strong></td>
                        <td>deg</td>
                        <td><span class="text-green">Locked</span></td>
                        <td class="text-muted">Just now</td>
                    </tr>
                    <tr>
                        <td><code>SYS_STATUS.load</code></td>
                        <td><strong id="paramCpu">18.4</strong></td>
                        <td>%</td>
                        <td><span class="text-cyan">Normal</span></td>
                        <td class="text-muted">Just now</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</main>
@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Simulate live telemetry value fluctuation
        setInterval(() => {
            const alt = (142 + Math.random() * 2).toFixed(1);
            const speed = (14.0 + Math.random() * 0.8).toFixed(1);
            const altEl = document.getElementById('telemetryAlt');
            const speedEl = document.getElementById('telemetrySpeed');
            if (altEl) altEl.textContent = alt + ' m';
            if (speedEl) speedEl.textContent = speed + ' m/s';
        }, 2000);
    });
</script>
@endpush