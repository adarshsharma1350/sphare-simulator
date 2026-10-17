{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome | Sphare Simulator</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #0b0f19;
            --card: #111827;
            --border: #253047;
            --blue: #1a73e8;
            --light-blue: #4ea1ff;
            --text: #f1f5f9;
            --muted: #94a3b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            color: var(--text);
            background:
                radial-gradient(ellipse at 80% 35%, #12264b 0%, transparent 38%),
                var(--bg);
            display: flex;
            flex-direction: column;
        }

        nav {
            width: 100%;
            padding: 22px 7%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(148, 163, 184, 0.12);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            color: white;
            font-size: 21px;
            background: linear-gradient(135deg, var(--blue), #1552a5);
            box-shadow: 0 0 25px rgba(26, 115, 232, 0.25);
        }

        .nav-label {
            color: var(--muted);
            font-size: 12px;
            letter-spacing: 1.5px;
        }

        main {
            width: min(1120px, 86%);
            margin: auto;
            padding: 80px 0;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 65px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 9px 13px;
            border: 1px solid #263d61;
            border-radius: 30px;
            background: rgba(26, 115, 232, 0.09);
            color: #8fc3ff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.4px;
            margin-bottom: 25px;
        }

        .dot {
            width: 7px;
            height: 7px;
            background: #4ea1ff;
            border-radius: 50%;
            box-shadow: 0 0 10px #4ea1ff;
        }

        h1 {
            font-size: clamp(38px, 5vw, 64px);
            line-height: 1.12;
            letter-spacing: -2.5px;
            margin-bottom: 22px;
        }

        h1 span {
            color: var(--light-blue);
        }

        .description {
            max-width: 520px;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.9;
            margin-bottom: 32px;
        }

        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 14px 21px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: 0.25s ease;
        }

        .btn-primary {
            background: var(--blue);
            color: white;
            box-shadow: 0 8px 25px rgba(26, 115, 232, 0.2);
        }

        .btn-primary:hover {
            background: #3287f5;
            transform: translateY(-2px);
        }

        .btn-secondary {
            color: var(--text);
            border: 1px solid var(--border);
            background: rgba(17, 24, 39, 0.7);
        }

        .btn-secondary:hover {
            border-color: var(--light-blue);
            transform: translateY(-2px);
        }

        .visual {
            position: relative;
            padding: 25px;
            border: 1px solid var(--border);
            border-radius: 24px;
            background: linear-gradient(145deg, #131e32, #0d1422);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }

        .visual::before {
            content: "";
            position: absolute;
            width: 200px;
            height: 200px;
            background: #1a73e8;
            filter: blur(100px);
            opacity: 0.2;
            right: -60px;
            top: -70px;
        }

        .visual-header {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
            font-size: 12px;
            font-weight: 600;
        }

        .status {
            color: #55d6a2;
            font-size: 10px;
        }

        .drone {
            position: relative;
            height: 190px;
            display: grid;
            place-items: center;
            background-image:
                linear-gradient(rgba(78,161,255,.045) 1px, transparent 1px),
                linear-gradient(90deg, rgba(78,161,255,.045) 1px, transparent 1px);
            background-size: 25px 25px;
        }

        .drone-symbol {
            font-size: 100px;
            color: #7dbbff;
            text-shadow: 0 0 35px rgba(78,161,255,.5);
            transform: rotate(-8deg);
        }

        .metrics {
            position: relative;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .metric {
            padding: 14px 10px;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: rgba(11, 15, 25, 0.65);
        }

        .metric small {
            display: block;
            color: var(--muted);
            font-size: 10px;
            margin-bottom: 8px;
        }

        .metric strong {
            font-size: 15px;
        }

        .features {
            grid-column: 1 / -1;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 15px;
        }

        .feature {
            padding: 21px;
            border: 1px solid var(--border);
            border-radius: 14px;
            background: rgba(17, 24, 39, 0.65);
            transition: 0.25s;
        }

        .feature:hover {
            border-color: #315b91;
            transform: translateY(-3px);
        }

        .feature-icon {
            font-size: 22px;
            margin-bottom: 14px;
        }

        .feature h3 {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .feature p {
            color: var(--muted);
            font-size: 12px;
            line-height: 1.7;
        }

        footer {
            padding: 22px 7%;
            border-top: 1px solid rgba(148, 163, 184, 0.12);
            display: flex;
            justify-content: space-between;
            gap: 15px;
            color: #64748b;
            font-size: 11px;
        }

        @media (max-width: 760px) {
            nav {
                padding: 18px 6%;
            }

            .nav-label {
                display: none;
            }

            main {
                width: 88%;
                grid-template-columns: 1fr;
                gap: 35px;
                padding: 55px 0;
            }

            h1 {
                letter-spacing: -1.5px;
            }

            .features {
                grid-template-columns: 1fr;
            }

            footer {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                transition: none !important;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="brand">
            <div class="brand-icon">✦</div>
            <span>SPHARE <span style="color:#4ea1ff;">SIMULATOR</span></span>
        </div>

        <div class="nav-label">DRONE GROUND CONTROL SYSTEM</div>
    </nav>

    <main>
        <section class="hero">
            <div class="eyebrow">
                <span class="dot"></span>
                YOUR FLIGHT LAB STARTS HERE
            </div>

            <h1>Explore the sky.<br>Master the <span>simulation.</span></h1>

            <p class="description">
                Welcome to Sphare Simulator — your workspace for drone
                flight control, real-time telemetry, GPS monitoring and
                mission planning. Build, test and explore in one place.
            </p>

            <div class="actions">
                <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                    Open Dashboard <span>→</span>
                </a>

                <a href="{{ url('/getting-started') }}" class="btn btn-secondary">
                    Getting Started
                </a>
            </div>
        </section>

        <section class="visual">
            <div class="visual-header">
                <span>FLIGHT OVERVIEW</span>
                <span class="status">● SIMULATION MODE</span>
            </div>

            <div class="drone">
                <div class="drone-symbol">✥</div>
            </div>

            <div class="metrics">
                <div class="metric">
                    <small>FLIGHT MODE</small>
                    <strong>GUIDED</strong>
                </div>

                <div class="metric">
                    <small>ALTITUDE</small>
                    <strong>-- m</strong>
                </div>

                <div class="metric">
                    <small>BATTERY</small>
                    <strong>-- %</strong>
                </div>
            </div>
        </section>

        <section class="features">
            <article class="feature">
                <div class="feature-icon">🎮</div>
                <h3>Flight Control</h3>
                <p>Explore flight commands and control your simulated drone.</p>
            </article>

            <article class="feature">
                <div class="feature-icon">📡</div>
                <h3>Live Telemetry</h3>
                <p>Monitor GPS, altitude, battery and vehicle status.</p>
            </article>

            <article class="feature">
                <div class="feature-icon">🗺️</div>
                <h3>Mission Planning</h3>
                <p>Explore maps, waypoints and geofence configuration.</p>
            </article>
        </section>
    </main>

    <footer>
        <span>© {{ date('Y') }} Sphare Simulator</span>
        <span>Built for exploration, testing and learning.</span>
    </footer>
</body>
</html>
 --}}

@extends('layouts.app')

@section('title', 'Welcome | Sphare Simulator')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush

@section('content')

<main class="welcome-page">

    {{-- ================= HERO ================= --}}
    <section class="welcome-hero">

        <div class="hero-glow hero-glow-one"></div>
        <div class="hero-glow hero-glow-two"></div>

        <div class="hero-content">

            <div class="welcome-badge">
                <span class="pulse-dot"></span>
                SPHARE SIMULATOR
                <span class="badge-divider"></span>
                SIMULATION ENVIRONMENT
            </div>

            <h1>
                Your drone.
                <span>Your mission.</span>
                <br>
                Your simulation.
            </h1>

            <p class="hero-description">
                A modern ground control environment for exploring drone
                flight, real-time telemetry, GPS, missions and autonomous
                operations — all from one place.
            </p>

            <div class="hero-actions">

                <a href="{{ url('/dashboard') }}" class="welcome-btn primary">
                    <span class="btn-icon">⌁</span>
                    Launch Simulator
                    <span class="arrow">→</span>
                </a>

                <a href="{{ url('/getting-started') }}" class="welcome-btn secondary">
                    Getting Started
                </a>

            </div>

            <div class="hero-meta">
                <div>
                    <span class="meta-dot green"></span>
                    Simulation Ready
                </div>

                <div>
                    <span class="meta-dot blue"></span>
                    MAVLink Compatible
                </div>

                <div>
                    <span class="meta-dot cyan"></span>
                    Real-time Telemetry
                </div>
            </div>

        </div>


        {{-- ================= CONTROL PREVIEW ================= --}}
        <div class="control-preview">

            <div class="preview-grid"></div>

            <div class="preview-top">
                <div>
                    <span class="preview-label">FLIGHT CONTROL</span>
                    <strong>SIMULATION PREVIEW</strong>
                </div>

                <div class="preview-status">
                    <span></span>
                    READY
                </div>
            </div>


            <div class="flight-display">

                <div class="radar-ring ring-one"></div>
                <div class="radar-ring ring-two"></div>
                <div class="radar-ring ring-three"></div>

                <div class="crosshair horizontal"></div>
                <div class="crosshair vertical"></div>

                <div class="drone-core">
                    <div class="drone-arm arm-left"></div>
                    <div class="drone-arm arm-right"></div>
                    <div class="drone-body">✦</div>
                </div>

                <div class="flight-point point-one"></div>
                <div class="flight-point point-two"></div>

                <div class="altitude-readout">
                    <span>ALT</span>
                    <strong>--</strong>
                    <small>METERS</small>
                </div>

                <div class="heading-readout">
                    <span>HDG</span>
                    <strong>000°</strong>
                </div>

            </div>


            <div class="preview-controls">

                <div class="preview-control">
                    <span>MODE</span>
                    <strong>GUIDED</strong>
                </div>

                <div class="preview-control">
                    <span>GPS</span>
                    <strong>-- SAT</strong>
                </div>

                <div class="preview-control">
                    <span>BATTERY</span>
                    <strong>--%</strong>
                </div>

            </div>

        </div>

    </section>


    {{-- ================= QUICK STATS ================= --}}
    <section class="welcome-stats">

        <div class="welcome-stat reveal">
            <div class="stat-icon blue-icon">⌁</div>
            <div>
                <strong>Flight Control</strong>
                <span>Command your simulated vehicle</span>
            </div>
        </div>

        <div class="welcome-stat reveal">
            <div class="stat-icon cyan-icon">⌁</div>
            <div>
                <strong>Live Telemetry</strong>
                <span>Monitor vehicle data in real time</span>
            </div>
        </div>

        <div class="welcome-stat reveal">
            <div class="stat-icon green-icon">✓</div>
            <div>
                <strong>Safety Systems</strong>
                <span>Geofence and flight monitoring</span>
            </div>
        </div>

        <div class="welcome-stat reveal">
            <div class="stat-icon purple-icon">⌘</div>
            <div>
                <strong>Mission Planning</strong>
                <span>Plan routes and autonomous missions</span>
            </div>
        </div>

    </section>


    {{-- ================= EXPLORE ================= --}}
    <section class="explore-section">

        <div class="section-heading reveal">

            <div>
                <div class="section-eyebrow">
                    EXPLORE THE PLATFORM
                </div>

                <h2>
                    Everything you need to
                    <span>operate smarter.</span>
                </h2>
            </div>

            <p>
                Sphare Simulator brings the major parts of a drone
                ground-control workflow into a single interface.
            </p>

        </div>


        <div class="feature-grid">

            {{-- Flight Control --}}
            <a href="{{ url('/remote-control') }}" class="feature-card feature-large reveal">

                <div class="feature-glow"></div>

                <div class="feature-top">
                    <div class="feature-icon-box blue">
                        ✦
                    </div>

                    <span class="feature-arrow">↗</span>
                </div>

                <div class="feature-content">

                    <span class="feature-label">FLIGHT OPERATIONS</span>

                    <h3>Remote Control</h3>

                    <p>
                        Control the simulated aircraft using virtual
                        joysticks, flight modes and quick commands.
                    </p>

                </div>

                <div class="mini-joystick">
                    <div class="mini-stick"></div>
                </div>

            </a>


            {{-- Telemetry --}}
            <a href="{{ url('/telemetry') }}" class="feature-card reveal">

                <div class="feature-top">
                    <div class="feature-icon-box cyan">
                        ◉
                    </div>

                    <span class="feature-arrow">↗</span>
                </div>

                <span class="feature-label">MONITORING</span>

                <h3>Live Telemetry</h3>

                <p>
                    Track altitude, GPS, battery, attitude and vehicle
                    status from one place.
                </p>

                <div class="telemetry-preview">
                    <div>
                        <span>ALT</span>
                        <strong>-- m</strong>
                    </div>

                    <div>
                        <span>GPS</span>
                        <strong>--</strong>
                    </div>

                    <div>
                        <span>BAT</span>
                        <strong>--%</strong>
                    </div>
                </div>

            </a>


            {{-- GPS --}}
            <a href="{{ url('/gps') }}" class="feature-card reveal">

                <div class="feature-top">
                    <div class="feature-icon-box green">
                        ◎
                    </div>

                    <span class="feature-arrow">↗</span>
                </div>

                <span class="feature-label">NAVIGATION</span>

                <h3>GPS & Position</h3>

                <p>
                    Visualize vehicle position and navigation information
                    during simulation.
                </p>

                <div class="gps-preview">
                    <div class="gps-pulse"></div>
                    <span>POSITION</span>
                </div>

            </a>


            {{-- Mission --}}
            <a href="{{ url('/mission-planner') }}" class="feature-card reveal">

                <div class="feature-top">
                    <div class="feature-icon-box purple">
                        ◈
                    </div>

                    <span class="feature-arrow">↗</span>
                </div>

                <span class="feature-label">AUTONOMY</span>

                <h3>Mission Planning</h3>

                <p>
                    Build routes, define waypoints and prepare autonomous
                    flight operations.
                </p>

                <div class="route-preview">
                    <span class="route-node active"></span>
                    <span class="route-line"></span>
                    <span class="route-node"></span>
                    <span class="route-line"></span>
                    <span class="route-node"></span>
                </div>

            </a>

        </div>

    </section>


    {{-- ================= SYSTEM WORKFLOW ================= --}}
    <section class="workflow-section reveal">

        <div class="workflow-content">

            <div class="section-eyebrow">
                HOW SPHARE WORKS
            </div>

            <h2>
                From command to
                <span>telemetry.</span>
            </h2>

            <p>
                Sphare Simulator is designed around a simple ground-control
                workflow: connect your simulation, send commands, receive
                vehicle data and visualize the result.
            </p>

            <a href="{{ url('/getting-started') }}" class="workflow-link">
                Explore the workflow
                <span>→</span>
            </a>

        </div>


        <div class="workflow-pipeline">

            <div class="pipeline-item">
                <div class="pipeline-number">01</div>
                <strong>Simulator</strong>
                <span>Virtual Vehicle</span>
            </div>

            <div class="pipeline-line"></div>

            <div class="pipeline-item active">
                <div class="pipeline-number">02</div>
                <strong>MAVLink</strong>
                <span>Communication</span>
            </div>

            <div class="pipeline-line"></div>

            <div class="pipeline-item">
                <div class="pipeline-number">03</div>
                <strong>Sphare</strong>
                <span>Ground Control</span>
            </div>

            <div class="pipeline-line"></div>

            <div class="pipeline-item">
                <div class="pipeline-number">04</div>
                <strong>Telemetry</strong>
                <span>Live Data</span>
            </div>

        </div>

    </section>


    {{-- ================= FINAL CTA ================= --}}
    <section class="final-cta reveal">

        <div class="cta-orbit orbit-one"></div>
        <div class="cta-orbit orbit-two"></div>

        <div class="cta-content">

            <div class="section-eyebrow">
                READY FOR TAKEOFF?
            </div>

            <h2>
                Enter the
                <span>simulation.</span>
            </h2>

            <p>
                Start exploring Sphare Simulator and experience your
                drone workflow from the ground up.
            </p>

            <a href="{{ url('/dashboard') }}" class="welcome-btn primary large">
                Launch Sphare Simulator
                <span class="arrow">→</span>
            </a>

        </div>

    </section>

</main>

@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {

        const revealItems = document.querySelectorAll('.reveal');

        const observer = new IntersectionObserver((entries) => {

            entries.forEach((entry) => {

                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }

            });

        }, {
            threshold: 0.12
        });

        revealItems.forEach((item) => {
            observer.observe(item);
        });


        /* Subtle mouse movement for hero control preview */

        const preview = document.querySelector('.control-preview');

        if (preview) {

            preview.addEventListener('mousemove', (event) => {

                const rect = preview.getBoundingClientRect();

                const x = (event.clientX - rect.left) / rect.width;
                const y = (event.clientY - rect.top) / rect.height;

                const rotateX = (0.5 - y) * 3;
                const rotateY = (x - 0.5) * 4;

                preview.style.transform =
                    `perspective(1100px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;

            });

            preview.addEventListener('mouseleave', () => {
                preview.style.transform =
                    'perspective(1100px) rotateX(0) rotateY(0)';
            });

        }

    });
</script>
@endpush

