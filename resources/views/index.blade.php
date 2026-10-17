
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sphare Simulator — Home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/remote-control.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    <style>
        /* Home page additions; shared design stays in style.css */

        body {
            background: #0b0f19;
            color: #e8edf7;
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        .container {
            width: min(1440px, 94%);
            margin: 0 auto;
            padding: 34px 0 60px;
        }

        .navbar {
            position: sticky;
            top: 0;
            z-index: 20;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
            padding: 16px 3%;
            background: rgba(11, 15, 25, .94);
            border-bottom: 1px solid rgba(255,255,255,.08);
            backdrop-filter: blur(18px);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            border-radius: 13px;
            background: linear-gradient(135deg, #1a73e8, #73aaff);
            color: #fff;
            font-weight: 800;
            font-size: 22px;
        }

        .brand strong, .brand span {
            display: block;
        }

        .brand strong {
            font-size: 14px;
            letter-spacing: 1.3px;
        }

        .brand span {
            margin-top: 4px;
            color: #8d9ab1;
            font-size: 11px;
        }

        .navlinks {
            display: flex;
            gap: 19px;
            flex-wrap: wrap;
        }

        .navlinks a {
            color: #aab6ca;
            text-decoration: none;
            font-size: 12px;
            transition: color .2s;
        }

        .navlinks a:hover, .navlinks a.active {
            color: #69a6ff;
        }

        .connection {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #aab6ca;
            font-size: 11px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #718096;
        }

        .header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }

        .eyebrow {
            color: #69a6ff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        h1 {
            margin: 12px 0;
            font-size: clamp(30px, 4vw, 46px);
            letter-spacing: -1.8px;
        }

        .subtitle {
            max-width: 660px;
            color: #93a1b8;
            font-size: 14px;
            line-height: 1.8;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 17px;
            border: 1px solid rgba(255,255,255,.12);
            border-radius: 10px;
            background: #161b2a;
            color: #e8edf7;
            text-decoration: none;
            font: inherit;
            font-size: 12px;
            cursor: pointer;
        }

        .btn.primary {
            background: #1a73e8;
            border-color: #1a73e8;
            color: #fff;
        }

        .btn:hover {
            filter: brightness(1.12);
        }

        .hero-panel {
            position: relative;
            overflow: hidden;
            padding: 30px;
            margin-bottom: 24px;
            border: 1px solid rgba(104,166,255,.2);
            border-radius: 20px;
            background:
                radial-gradient(ellipse at 90% 10%, rgba(26,115,232,.2), transparent 40%),
                linear-gradient(135deg, #141c2d, #101522);
        }

        .hero-panel::after {
            content: "S";
            position: absolute;
            right: 42px;
            top: -45px;
            color: rgba(255,255,255,.025);
            font-size: 230px;
            font-weight: 800;
            pointer-events: none;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-panel h2 {
            margin: 12px 0;
            font-size: 25px;
        }

        .hero-panel p {
            max-width: 650px;
            color: #9ba9c0;
            font-size: 13px;
            line-height: 1.8;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 22px;
        }

        .kpis {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-bottom: 36px;
        }

        .card {
            min-width: 0;
            padding: 21px;
            border: 1px solid rgba(255,255,255,.075);
            border-radius: 15px;
            background: #111725;
            transition: border-color .2s, transform .2s;
        }

        .kpi-label {
            color: #93a1b8;
            font-size: 12px;
        }

        .kpi-value {
            margin: 12px 0 7px;
            font-size: 29px;
            font-weight: 800;
        }

        .kpi-sub {
            color: #78879e;
            font-size: 11px;
        }

        .blue {
            color: #69a6ff;
        }

        .directory-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 18px;
            flex-wrap: wrap;
            margin-bottom: 22px;
        }

        .directory-header h2 {
            margin: 8px 0;
            font-size: 24px;
        }

        .directory-header p {
            margin: 0;
            color: #8d9ab1;
            font-size: 12px;
            line-height: 1.7;
        }

        .search-box {
            width: min(360px, 100%);
        }

        .search-box input {
            box-sizing: border-box;
            width: 100%;
            padding: 14px 16px;
            outline: none;
            border: 1px solid #293247;
            border-radius: 11px;
            background: #111725;
            color: #e8edf7;
            font: inherit;
            font-size: 12px;
        }

        .search-box input:focus {
            border-color: #1a73e8;
        }

        .module {
            margin-top: 30px;
            scroll-margin-top: 100px;
        }

        .section-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 15px;
        }

        .section-title h2 {
            margin: 0;
            font-size: 16px;
        }

        .section-title span {
            color: #7f8ca3;
            font-size: 11px;
        }

        .page-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 13px;
        }

        .page-link {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            min-width: 0;
            padding: 17px;
            border: 1px solid rgba(255,255,255,.075);
            border-radius: 13px;
            background: #111725;
            color: inherit;
            text-decoration: none;
            transition: .2s ease;
        }

        .page-link:hover {
            transform: translateY(-3px);
            border-color: rgba(26,115,232,.65);
            background: #151e30;
        }

        .page-icon {
            display: grid;
            place-items: center;
            flex: 0 0 38px;
            height: 38px;
            border-radius: 11px;
            background: rgba(26,115,232,.13);
            color: #76b0ff;
            font-size: 17px;
        }

        .page-info {
            min-width: 0;
        }

        .page-info strong {
            display: block;
            margin: 2px 0 7px;
            font-size: 12px;
            font-weight: 600;
        }

        .page-info span {
            display: block;
            color: #7f8ca3;
            font-size: 10px;
            line-height: 1.6;
            overflow-wrap: anywhere;
        }

        .page-arrow {
            margin-left: auto;
            color: #687991;
            font-size: 15px;
        }

        .empty-state {
            display: none;
            padding: 35px 15px;
            text-align: center;
            color: #93a1b8;
            font-size: 13px;
        }

        .footer {
            margin-top: 50px;
            padding-top: 22px;
            border-top: 1px solid rgba(255,255,255,.08);
            color: #728097;
            font-size: 11px;
            line-height: 1.8;
            text-align: center;
        }

        @media (max-width: 900px) {
            .page-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .navbar {
                align-items: flex-start;
            }

            .connection {
                display: none;
            }
        }

        @media (max-width: 560px) {
            .container {
                width: 92%;
                padding-top: 24px;
            }

            .navbar {
                position: relative;
            }

            .navlinks {
                gap: 13px;
            }

            .hero-panel {
                padding: 22px;
            }

            .kpis {
                grid-template-columns: 1fr;
            }

            .page-grid {
                grid-template-columns: 1fr;
            }

            .search-box {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">
        <div class="brand">
            <div class="logo">S</div>
            <div>
                <strong>SPHARE SIMULATOR</strong>
                <span>Simulation &amp; Ground Control</span>
            </div>
        </div>

        <div class="navlinks">
            <a href="{{ url('/') }}" class="active">Home</a>
            <a href="{{ url('/pages/overview/dashboard') }}">Dashboard</a>
            <a href="{{ url('/pages/flight_operations/remote_control') }}">Remote</a>
            <a href="{{ url('/pages/flight_operations/mission_planner') }}">Mission</a>
            <a href="#pageDirectory">All Pages</a>
        </div>

        <div class="connection">
            <div class="status-dot"></div>
            <span>Simulator Dashboard</span>
        </div>
    </nav>


    <!-- ================= MAIN ================= -->

    <main class="container">

        <header class="header">
            <div>
                <div class="eyebrow">SPHARE / CONTROL PLATFORM</div>
                <h1>Simulation <span class="blue">Command Center</span></h1>
                <p class="subtitle">
                    One workspace for flight operations, vehicle setup, navigation,
                    AI vision, diagnostics, safety and system management.
                </p>
            </div>

            <div class="actions">
                <a class="btn primary"
                   href="{{ url('/pages/flight_operations/remote_control') }}">
                    Open Remote Controller ↗
                </a>
            </div>
        </header>


        <!-- ================= HERO ================= -->

        <section class="hero-panel">
            <div class="hero-content">
                <div class="eyebrow">YOUR WORKSPACE</div>
                <h2>Everything you need. One control interface.</h2>
                <p>
                    Browse the complete page directory below. Search by page name,
                    open any module directly, and keep your workflow organized
                    through a consistent Sphare interface.
                </p>

                <div class="hero-actions">
                    <a class="btn primary" href="#pageDirectory">
                        Explore All Modules →
                    </a>

                    <a class="btn"
                       href="{{ url('/pages/flight_operations/simulator') }}">
                        Open Simulator
                    </a>

                    <a class="btn"
                       href="{{ url('/pages/navigation_environment/telemetry') }}">
                        View Telemetry
                    </a>
                </div>
            </div>
        </section>


        <!-- ================= KPI ================= -->

        <section class="kpis">
            <div class="card">
                <div class="kpi-label">Page Directory</div>
                <div class="kpi-value blue" id="pageCount">69</div>
                <div class="kpi-sub">Registered page entries</div>
            </div>

            <div class="card">
                <div class="kpi-label">Feature Modules</div>
                <div class="kpi-value" id="moduleCount">9</div>
                <div class="kpi-sub">Organized by functionality</div>
            </div>

            <div class="card">
                <div class="kpi-label">Quick Navigation</div>
                <div class="kpi-value">⌕</div>
                <div class="kpi-sub">Search and open pages directly</div>
            </div>
        </section>


        <!-- ================= PAGE DIRECTORY ================= -->

        <section id="pageDirectory">

            <div class="directory-header">
                <div>
                    <div class="eyebrow">DIRECTORY / 001</div>
                    <h2>All Pages</h2>
                    <p>Choose a module or search for a specific page.</p>
                </div>

                <div class="search-box">
                    <input
                        type="search"
                        id="pageSearch"
                        placeholder="Search pages, modules or filenames..."
                        autocomplete="off"
                        aria-label="Search page directory">
                </div>
            </div>


            @php
                $modules = [
                    [
                        'name' => 'Overview',
                        'slug' => 'overview',
                        'description' => 'Home, index and main dashboard',
                        'icon' => '⌂',
                        'pages' => [
                            ['home', 'Home', 'Main landing page'],
                            ['index', 'Page Directory', 'Complete page index'],
                            ['dashboard', 'Dashboard', 'Main system overview'],
                        ],
                    ],
                    [
                        'name' => 'Flight Operations',
                        'slug' => 'flight_operations',
                        'description' => 'Control, missions and fleet operations',
                        'icon' => '✈',
                        'pages' => [
                            ['rc_controller', 'RC Controller', 'Radio controller interface'],
                            ['joystick', 'Joystick', 'Joystick input controls'],
                            ['remote_control', 'Remote Control', 'Remote flight control center'],
                            ['flight_control', 'Flight Control', 'Flight commands and modes'],
                            ['command_center', 'Command Center', 'Operations command hub'],
                            ['simulator', 'Simulator', 'Simulation workspace'],
                            ['preflight', 'Preflight', 'Preflight readiness checks'],
                            ['mission_planner', 'Mission Planner', 'Plan flight missions'],
                            ['mission_library', 'Mission Library', 'Saved mission collection'],
                            ['flight_history', 'Flight History', 'Previous flight records'],
                            ['replay', 'Replay', 'Review recorded sessions'],
                            ['multi_drone', 'Multi-Drone', 'Multiple vehicle management'],
                            ['swarm', 'Swarm', 'Coordinated swarm operations'],
                        ],
                    ],
                    [
                        'name' => 'Vehicle Setup',
                        'slug' => 'vehicle_setup',
                        'description' => 'Configuration, calibration and hardware',
                        'icon' => '⚙',
                        'pages' => [
                            ['calibration', 'Calibration', 'Sensor calibration'],
                            ['parameters', 'Parameters', 'Vehicle parameter settings'],
                            ['firmware', 'Firmware', 'Firmware information and tools'],
                            ['vehicle_setup', 'Vehicle Setup', 'Vehicle configuration'],
                            ['battery', 'Battery', 'Battery and power monitoring'],
                            ['gimbal', 'Gimbal', 'Gimbal configuration'],
                            ['payload', 'Payload', 'Payload management'],
                        ],
                    ],
                    [
                        'name' => 'Navigation & Environment',
                        'slug' => 'navigation_environment',
                        'description' => 'Position, telemetry, maps and environment',
                        'icon' => '◎',
                        'pages' => [
                            ['compass', 'Compass', 'Heading and compass data'],
                            ['network', 'Network', 'Network status'],
                            ['connection', 'Connection', 'Vehicle connection details'],
                            ['gps', 'GPS', 'Satellite positioning'],
                            ['maps', 'Maps', 'Map and location view'],
                            ['telemetry', 'Telemetry', 'Vehicle telemetry values'],
                            ['airspace', 'Airspace', 'Airspace information'],
                            ['range_finder', 'Range Finder', 'Distance sensor readings'],
                            ['terrain', 'Terrain', 'Terrain awareness'],
                            ['weather', 'Weather', 'Environmental conditions'],
                            ['obstacle_avoidance', 'Obstacle Avoidance', 'Obstacle detection tools'],
                            ['agriculture', 'Agriculture', 'Agricultural monitoring'],
                        ],
                    ],
                    [
                        'name' => 'Vision & Imaging',
                        'slug' => 'vision_imaging',
                        'description' => 'Camera, AI vision and visual control',
                        'icon' => '◉',
                        'pages' => [
                            ['ai_vision', 'AI Vision', 'Computer vision tools'],
                            ['camera_fpv', 'Camera FPV', 'First-person camera view'],
                            ['thermal', 'Thermal', 'Thermal imaging tools'],
                            ['3d_view', '3D View', 'Three-dimensional visualization'],
                            ['gesture_control', 'Gesture Control', 'Hand gesture interaction'],
                        ],
                    ],
                    [
                        'name' => 'Monitoring & Diagnostics',
                        'slug' => 'monitoring_diagnostics',
                        'description' => 'Logs, analytics and system health',
                        'icon' => '▥',
                        'pages' => [
                            ['analytics', 'Analytics', 'System analytics'],
                            ['api_monitor', 'API Monitor', 'API activity and status'],
                            ['logs', 'Logs', 'System log viewer'],
                            ['eventlogs', 'Event Logs', 'Event history'],
                            ['storage', 'Storage', 'Storage information'],
                            ['notifications', 'Notifications', 'System notifications'],
                            ['system_health', 'System Health', 'Health and diagnostics'],
                            ['status', 'Status', 'Current system status'],
                            ['system_info', 'System Information', 'System details'],
                        ],
                    ],
                    [
                        'name' => 'Safety',
                        'slug' => 'safety',
                        'description' => 'Flight safety and operating boundaries',
                        'icon' => '盾',
                        'pages' => [
                            ['failsafe', 'Failsafe', 'Failsafe configuration and status'],
                            ['geofence', 'Geofence', 'Geographic safety boundaries'],
                        ],
                    ],
                    [
                        'name' => 'Developer Tools',
                        'slug' => 'developer_tools',
                        'description' => 'Automation, terminal and configuration',
                        'icon' => '⌘',
                        'pages' => [
                            ['automation', 'Automation', 'Automated workflows'],
                            ['developer', 'Developer', 'Developer utilities'],
                            ['cli', 'CLI', 'Command-line interface'],
                            ['settings', 'Settings', 'Application settings'],
                            ['shortcuts', 'Shortcuts', 'Quick navigation shortcuts'],
                        ],
                    ],
                    [
                        'name' => 'Help & Documentation',
                        'slug' => 'help_documentation',
                        'description' => 'Guides, support and product information',
                        'icon' => '?',
                        'pages' => [
                            ['about', 'About', 'About Sphare Simulator'],
                            ['changelog', 'Changelog', 'Version changes'],
                            ['contact_us', 'Contact Us', 'Contact information'],
                            ['documentation', 'Documentation', 'Product documentation'],
                            ['faqs', 'FAQs', 'Frequently asked questions'],
                            ['features', 'Features', 'Platform feature overview'],
                            ['feedback', 'Feedback', 'Submit product feedback'],
                            ['getting_started', 'Getting Started', 'Getting started guide'],
                            ['help', 'Help', 'Help center'],
                            ['licenses', 'Licenses', 'Third-party licenses'],
                            ['privacy', 'Privacy', 'Privacy information'],
                            ['support', 'Support', 'Support resources'],
                            ['terms', 'Terms', 'Terms of use'],
                        ],
                    ],
                ];

                $totalPages = collect($modules)->sum(
                    fn ($module) => count($module['pages'])
                );
            @endphp


            @foreach ($modules as $module)
                <section
                    class="module"
                    id="module-{{ $module['slug'] }}"
                    data-module="{{ strtolower($module['name']) }}">

                    <div class="section-title">
                        <h2>
                            {{ $module['icon'] }}
                            &nbsp; {{ $module['name'] }}
                        </h2>

                        <span>
                            {{ count($module['pages']) }} PAGES
                        </span>
                    </div>

                    <p class="subtitle">
                        {{ $module['description'] }}
                    </p>

                    <div class="page-grid">
                        @foreach ($module['pages'] as $page)
                            <a
                                class="page-link"
                                href="{{ url('/pages/' . $module['slug'] . '/' . $page[0]) }}"
                                data-search="{{ strtolower($module['name'] . ' ' . $page[0] . ' ' . $page[1] . ' ' . $page[2]) }}">

                                <div class="page-icon">
                                    {{ $module['icon'] }}
                                </div>

                                <div class="page-info">
                                    <strong>{{ $page[1] }}</strong>
                                    <span>{{ $page[2] }}</span>
                                    <span>{{ $page[0] }}.blade.php</span>
                                </div>

                                <span class="page-arrow">↗</span>
                            </a>
                        @endforeach
                    </div>
                </section>
            @endforeach

            <div class="empty-state" id="emptyState">
                No matching pages found. Try another search.
            </div>
        </section>


        <!-- ================= FOOTER ================= -->

        <footer class="footer">
            <strong>SPHARE SIMULATOR</strong>
            <p>Simulation · Control · Navigation · Intelligence</p>
            <p>Page Directory · {{ $totalPages }} registered entries · 9 modules</p>
        </footer>

    </main>


    <!-- ================= SEARCH ================= -->

    <script>
        const pageSearch = document.getElementById('pageSearch');
        const pageLinks = document.querySelectorAll('.page-link');
        const modules = document.querySelectorAll('.module');
        const pageCount = document.getElementById('pageCount');
        const emptyState = document.getElementById('emptyState');

        pageCount.textContent = pageLinks.length;
        document.getElementById('moduleCount').textContent = modules.length;

        pageSearch.addEventListener('input', function () {
            const query = this.value.trim().toLowerCase();
            let visiblePages = 0;

            modules.forEach(function (module) {
                const links = module.querySelectorAll('.page-link');
                let moduleHasResults = false;

                links.forEach(function (link) {
                    const matches = link.dataset.search.includes(query);

                    link.style.display = matches ? 'flex' : 'none';

                    if (matches) {
                        moduleHasResults = true;
                        visiblePages++;
                    }
                });

                module.style.display = moduleHasResults ? '' : 'none';
            });

            pageCount.textContent = visiblePages;
            emptyState.style.display = visiblePages === 0 ? 'block' : 'none';
        });
    </script>

</body>
</html>

