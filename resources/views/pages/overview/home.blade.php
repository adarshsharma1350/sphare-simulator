<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home — Sphare Simulator</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/remote-control.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <style>
        /* Home-page additions; shared visual language comes from style.css/navbar.css. */
        .home-page {
            max-width: 1600px;
            margin: 0 auto;
            padding: 28px;
        }

        .home-page .header {
            align-items: center;
        }

        .home-page .subtitle {
            max-width: 700px;
            line-height: 1.7;
        }

        .home-hero {
            position: relative;
            overflow: hidden;
            display: grid;
            grid-template-columns: minmax(0, 1.45fr) minmax(260px, .8fr);
            gap: 24px;
            align-items: center;
            padding: 30px;
            margin-bottom: 22px;
            background: linear-gradient(120deg, rgba(26, 115, 232, .17), rgba(17, 24, 39, .94) 58%, rgba(34, 211, 238, .08));
            border: 1px solid rgba(70, 145, 255, .22);
            border-radius: 18px;
            box-shadow: var(--shadow, 0 18px 45px rgba(0, 0, 0, .32));
        }

        .home-hero::after {
            content: '';
            position: absolute;
            width: 280px;
            height: 280px;
            right: 6%;
            top: -180px;
            border-radius: 50%;
            border: 1px solid rgba(34, 211, 238, .15);
            box-shadow: 0 0 0 35px rgba(34, 211, 238, .025), 0 0 0 70px rgba(34, 211, 238, .02);
            pointer-events: none;
        }

        .home-hero-copy,
        .home-hero-side {
            position: relative;
            z-index: 1;
        }

        .home-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #66cfff;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1.7px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .home-kicker::before {
            content: '';
            width: 22px;
            height: 2px;
            background: linear-gradient(90deg, var(--blue, #1a73e8), var(--cyan, #22d3ee));
            border-radius: 2px;
        }

        .home-title {
            margin: 0 0 12px;
            font-size: clamp(28px, 3.4vw, 43px);
            line-height: 1.12;
            letter-spacing: -1.2px;
        }

        .home-title span {
            color: #54c8ff;
        }

        .home-description {
            max-width: 650px;
            color: var(--muted, #8f9bb0);
            line-height: 1.8;
            font-size: 13px;
            margin-bottom: 23px;
        }

        .home-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .home-primary,
        .home-secondary {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 12px;
            font-weight: 700;
            transition: .2s ease;
        }

        .home-primary {
            color: #fff;
            background: linear-gradient(135deg, #1a73e8, #168bd7);
            border: 1px solid rgba(110, 190, 255, .35);
            box-shadow: 0 8px 24px rgba(26, 115, 232, .22);
        }

        .home-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(26, 115, 232, .3);
        }

        .home-secondary {
            color: #d9e6f8;
            background: rgba(255, 255, 255, .035);
            border: 1px solid rgba(255, 255, 255, .1);
        }

        .home-secondary:hover {
            border-color: rgba(34, 211, 238, .35);
            background: rgba(34, 211, 238, .06);
        }

        .home-session {
            padding: 20px;
            background: rgba(8, 14, 25, .52);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: 14px;
        }

        .home-session-label {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            align-items: center;
            color: var(--muted, #8f9bb0);
            font-size: 10px;
            letter-spacing: .7px;
            text-transform: uppercase;
            margin-bottom: 17px;
        }

        .home-session-icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 13px;
            color: #8edbff;
            background: rgba(26, 115, 232, .16);
            border: 1px solid rgba(26, 115, 232, .24);
            font-size: 21px;
            margin-bottom: 13px;
        }

        .home-session h2 {
            font-size: 17px;
            margin: 0 0 7px;
        }

        .home-session p {
            font-size: 11px;
            line-height: 1.7;
            color: var(--muted, #8f9bb0);
            margin: 0 0 17px;
        }

        .home-session .home-primary {
            width: 100%;
            box-sizing: border-box;
        }

        .home-section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 15px;
            margin: 27px 0 14px;
        }

        .home-section-heading h2 {
            margin: 0;
            font-size: 16px;
            font-weight: 700;
        }

        .home-section-heading p {
            color: var(--muted, #8f9bb0);
            font-size: 11px;
            margin: 5px 0 0;
        }

        .home-text-link {
            color: #64bfff;
            font-size: 11px;
            font-weight: 600;
            white-space: nowrap;
        }

        .home-quick-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .home-quick-card {
            display: block;
            min-height: 145px;
            padding: 19px;
            background: rgba(17, 24, 39, .84);
            border: 1px solid var(--line, rgba(255, 255, 255, .08));
            border-radius: 14px;
            transition: transform .2s ease, border-color .2s ease, background .2s ease;
        }

        .home-quick-card:hover {
            transform: translateY(-3px);
            border-color: rgba(26, 115, 232, .42);
            background: rgba(22, 31, 48, .96);
        }

        .home-quick-icon {
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            margin-bottom: 15px;
            border-radius: 11px;
            color: #70cfff;
            background: rgba(26, 115, 232, .13);
            border: 1px solid rgba(26, 115, 232, .19);
            font-size: 19px;
        }

        .home-quick-card h3 {
            font-size: 13px;
            margin: 0 0 7px;
        }

        .home-quick-card p {
            color: var(--muted, #8f9bb0);
            font-size: 10px;
            line-height: 1.65;
            margin: 0;
        }

        .home-bottom-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.15fr) minmax(280px, .85fr);
            gap: 15px;
        }

        .home-panel {
            padding: 20px;
            background: rgba(17, 24, 39, .82);
            border: 1px solid var(--line, rgba(255, 255, 255, .08));
            border-radius: 14px;
        }

        .home-panel-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 17px;
        }

        .home-panel-title h3 {
            margin: 0;
            font-size: 13px;
        }

        .home-panel-title span {
            color: var(--muted, #8f9bb0);
            font-size: 10px;
        }

        .home-activity-row {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 13px 0;
            border-top: 1px solid rgba(255, 255, 255, .055);
        }

        .home-activity-icon {
            flex: 0 0 34px;
            height: 34px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: rgba(255, 255, 255, .045);
            color: #9ccfff;
        }

        .home-activity-copy {
            min-width: 0;
            flex: 1;
        }

        .home-activity-copy strong {
            display: block;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .home-activity-copy small {
            display: block;
            color: var(--muted, #8f9bb0);
            font-size: 10px;
            line-height: 1.5;
        }

        .home-arrow {
            color: #8292aa;
            font-size: 16px;
        }

        .home-status-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            border-top: 1px solid rgba(255, 255, 255, .055);
            font-size: 11px;
        }

        .home-status-row:first-of-type {
            border-top: 0;
        }

        .home-status-name {
            display: flex;
            align-items: center;
            gap: 9px;
            color: #c9d5e6;
        }

        .home-status-name i {
            width: 7px;
            height: 7px;
            display: inline-block;
            border-radius: 50%;
            background: #64748b;
        }

        .home-status-value {
            color: var(--muted, #8f9bb0);
            text-align: right;
        }

        .home-status-value.pending {
            color: #fbbf24;
        }

        .home-footer {
            padding: 25px 0 5px;
            display: flex;
            justify-content: space-between;
            gap: 12px;
            color: #68768c;
            font-size: 10px;
        }

        @media (max-width: 1050px) {
            .home-quick-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .home-hero {
                grid-template-columns: 1fr;
            }

            .home-session {
                max-width: none;
            }
        }

        @media (max-width: 760px) {
            .home-page {
                padding: 18px;
            }

            .home-hero {
                padding: 22px;
            }

            .home-bottom-grid {
                grid-template-columns: 1fr;
            }

            .home-section-heading {
                align-items: flex-start;
            }
        }

        @media (max-width: 480px) {
            .home-quick-grid {
                grid-template-columns: 1fr;
            }

            .home-quick-card {
                min-height: auto;
            }

            .home-footer {
                flex-direction: column;
            }

            .home-title {
                font-size: 29px;
            }
        }
    </style>
</head>

<body>
    <nav class="topbar">
        <a href="{{ url('/home') }}" class="brand" aria-label="Sphare Simulator Home">
            <div class="logo">S</div>
            <div>
                <strong>SPHARE SIMULATOR</strong>
                <span>Simulation Control Workspace</span>
            </div>
        </a>

        <div class="nav">
            <a href="{{ url('/home') }}" class="active">Home</a>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <a href="{{ url('/simulator') }}">Simulator</a>
            <a href="{{ url('/remote-control') }}">Remote</a>
            <a href="{{ url('/mission-planner') }}">Mission Planner</a>
            <a href="{{ url('/telemetry') }}">Telemetry</a>
            <a href="{{ url('/index') }}">All Pages</a>
        </div>

        <div class="connection" title="Connection state is not checked on this page">
            <span class="dot" style="background:#64748b;box-shadow:none"></span>
            <span>Connection unverified</span>
        </div>
    </nav>

    <main class="home-page">
        <header class="header">
            <div>
                <div class="eyebrow">YOUR SIMULATION WORKSPACE</div>
                <h1>Home</h1>
                <p class="subtitle">Pick up where you left off, open your frequently used tools, and get a quick
                    overview of your workspace.</p>
            </div>
            <div class="actions">
                <a class="btn" href="{{ url('/dashboard') }}">Open Dashboard ↗</a>
            </div>
        </header>

        <section class="home-hero">
            <div class="home-hero-copy">
                <div class="home-kicker">Welcome to Sphare</div>
                <h2 class="home-title">Your workspace.<br><span>Your next mission.</span></h2>
                <p class="home-description">Continue exploring your simulation tools from one place. Open a simulator,
                    review telemetry, or jump back into the control interface whenever you are ready.</p>
                <div class="home-actions">
                    <a class="home-primary" href="{{ session('last_visited_url', url('/simulator')) }}">▶ &nbsp;
                        Continue Session</a>
                    <a class="home-secondary" href="{{ url('/index') }}">▦ &nbsp; Explore All Pages</a>
                </div>
            </div>

            <aside class="home-session">
                <div class="home-session-label"><span>Last session overview</span><span>Workspace</span></div>
                <div class="home-session-icon">◷</div>
                <h2>{{ session('last_visited_title', 'Ready when you are') }}</h2>
                <p>{{ session('last_visited_at', 'Your recent page and session details can appear here once activity tracking is connected.') }}
                </p>
                <a class="home-primary" href="{{ session('last_visited_url', url('/simulator')) }}">Resume Previous Page
                    <span aria-hidden="true">→</span></a>
            </aside>
        </section>

        <section aria-labelledby="quick-actions-heading">
            <div class="home-section-heading">
                <div>
                    <h2 id="quick-actions-heading">Quick Actions</h2>
                    <p>Your most-used tools, one click away.</p>
                </div>
                <a class="home-text-link" href="{{ url('/index') }}">View all tools ↗</a>
            </div>
            <div class="home-quick-grid">
                <a class="home-quick-card" href="{{ url('/simulator') }}">
                    <div class="home-quick-icon">▶</div>
                    <h3>Start Simulator</h3>
                    <p>Open the simulation workspace and continue testing your setup.</p>
                </a>
                <a class="home-quick-card" href="{{ url('/remote-control') }}">
                    <div class="home-quick-icon">⌘</div>
                    <h3>Remote Controller</h3>
                    <p>Access the virtual controller and manual control interface.</p>
                </a>
                <a class="home-quick-card" href="{{ url('/mission-planner') }}">
                    <div class="home-quick-icon">⌖</div>
                    <h3>Mission Planner</h3>
                    <p>Open mission planning tools and review route configurations.</p>
                </a>
                <a class="home-quick-card" href="{{ url('/telemetry') }}">
                    <div class="home-quick-icon">⌁</div>
                    <h3>Live Telemetry</h3>
                    <p>View vehicle data and connection details when telemetry is available.</p>
                </a>
            </div>
        </section>

        <section aria-labelledby="recent-activity-heading">
            <div class="home-section-heading">
                <div>
                    <h2 id="recent-activity-heading">Recent Activity</h2>
                    <p>A compact snapshot of your latest workspace activity.</p>
                </div>
                <span class="home-text-link">Activity overview</span>
            </div>
            <div class="home-bottom-grid">
                <div class="home-panel">
                    <div class="home-panel-title">
                        <h3>Recently Opened</h3><span>Session history</span>
                    </div>
                    <a class="home-activity-row" href="{{ session('last_visited_url', url('/simulator')) }}">
                        <div class="home-activity-icon">◷</div>
                        <div class="home-activity-copy">
                            <strong>{{ session('last_visited_title', 'Continue from your last page') }}</strong><small>{{ session('last_visited_at', 'Your last visited page will be shown here when tracking is enabled.') }}</small>
                        </div>
                        <span class="home-arrow">›</span>
                    </a>
                    <a class="home-activity-row" href="{{ url('/dashboard') }}">
                        <div class="home-activity-icon">▦</div>
                        <div class="home-activity-copy"><strong>Workspace Dashboard</strong><small>Open the main system
                                overview.</small></div>
                        <span class="home-arrow">›</span>
                    </a>
                    <a class="home-activity-row" href="{{ url('/index') }}">
                        <div class="home-activity-icon">☷</div>
                        <div class="home-activity-copy"><strong>All Pages Directory</strong><small>Browse the complete
                                collection of simulator pages.</small></div>
                        <span class="home-arrow">›</span>
                    </a>
                </div>

                <div class="home-panel">
                    <div class="home-panel-title">
                        <h3>System Overview</h3><span>Current page status</span>
                    </div>
                    <div class="home-status-row"><span class="home-status-name"><i></i> MAVLink Connection</span><span
                            class="home-status-value pending">Not verified</span></div>
                    <div class="home-status-row"><span class="home-status-name"><i></i> Simulator</span><span
                            class="home-status-value">Open simulator to check</span></div>
                    <div class="home-status-row"><span class="home-status-name"><i></i> Recent Activity</span><span
                            class="home-status-value">Session tracking pending</span></div>
                    <div class="home-status-row"><span class="home-status-name"><i></i> Saved Missions</span><span
                            class="home-status-value">Connect project storage</span></div>
                </div>
            </div>
        </section>

        <footer class="home-footer">
            <span>© {{ date('Y') }} Sphare Simulator</span>
            <span>Simulation workspace · Status values require live integration</span>
        </footer>
    </main>
</body>

</html>
