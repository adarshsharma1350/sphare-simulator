@extends('layouts.app')

@section('title', 'Page Directory | Sphare Simulator')

@section('content')
<main class="main-container">

    <!-- Page Header -->
    <header class="section-heading reveal">
        <div>
            <div class="section-eyebrow">DIRECTORY / SYSTEM INDEX</div>
            <h1>Complete <span class="text-highlight">Page Directory</span></h1>
            <p class="hero-description index-hero-desc">
                Browse, search, and access all available modules, views, and system controllers
                across the entire Sphare Simulator ecosystem from a single interface.
            </p>
        </div>

        {{-- <div class="header-actions">
            <a class="btn btn-secondary" href="{{ url('/home') }}">
                ← Back to Home
            </a>
        </div> --}}
    </header>


    <!-- Stats / KPIs Section -->
    <section class="stats-section reveal">
        <div class="card stat-card">
            <div class="stat-icon text-blue">📁</div>
            <div>
                <span class="stat-label">Total Pages</span>
                <strong class="stat-value" id="pageCount">69</strong>
                <span class="stat-sub">Registered blade templates</span>
            </div>
        </div>

        <div class="card stat-card">
            <div class="stat-icon text-cyan">⚡</div>
            <div>
                <span class="stat-label">Core Modules</span>
                <strong class="stat-value" id="moduleCount">9</strong>
                <span class="stat-sub">Functional categories</span>
            </div>
        </div>

        <div class="card stat-card">
            <div class="stat-icon text-green">⌕</div>
            <div>
                <span class="stat-label">Live Filtering</span>
                <strong class="stat-value">Active</strong>
                <span class="stat-sub">Instant keyword search</span>
            </div>
        </div>
    </section>


    <!-- Directory Search & Content -->
    <section id="pageDirectory" class="explore-section reveal">

        <div class="section-heading directory-top-heading flex justify-between">
            <div>
                <div class="section-eyebrow">EXPLORE MODULES</div>
                <h2 class="directory-title">All System Views</h2>
                <p class="directory-subtitle">Type below to filter views by name, category, or filename.</p>
            </div>

            <div class="search-box-wrapper">
                <input
                    type="search"
                    id="pageSearch"
                    class="directory-search-input"
                    placeholder="Search pages, modules or filenames..."
                    autocomplete="off"
                    aria-label="Search page directory"
                >
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
                class="card module-section"
                id="module-{{ $module['slug'] }}"
                data-module="{{ strtolower($module['name']) }}"
            >
                <div class="module-header">
                    <h2 class="module-title">
                        <span class="module-icon-symbol">{{ $module['icon'] }}</span>
                        {{ $module['name'] }}
                    </h2>

                    <span class="badge">
                        {{ count($module['pages']) }} PAGES
                    </span>
                </div>

                <p class="module-desc">
                    {{ $module['description'] }}
                </p>

                <div class="card-grid">
                    @foreach ($module['pages'] as $page)
                        <a
                            class="card card-interactive page-item-card"
                            href="{{ url('/pages/' . $module['slug'] . '/' . $page[0]) }}"
                            data-search="{{ strtolower($module['name'] . ' ' . $page[0] . ' ' . $page[1] . ' ' . $page[2]) }}"
                        >
                            <div class="page-card-top">
                                <div class="icon-box bg-blue-soft">
                                    {{ $module['icon'] }}
                                </div>
                                <span class="card-arrow">↗</span>
                            </div>

                            <div class="card-body">
                                <strong>{{ $page[1] }}</strong>
                                <span class="page-desc-text">{{ $page[2] }}</span>
                                <span class="page-filename">{{ $page[0] }}.blade.php</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endforeach

        <div class="card empty-state-card" id="emptyState">
            No matching pages found. Try another search query.
        </div>
    </section>

</main>
@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const pageSearch = document.getElementById('pageSearch');
        const pageLinks = document.querySelectorAll('.page-item-card[data-search]');
        const modules = document.querySelectorAll('.module-section');
        const pageCount = document.getElementById('pageCount');
        const emptyState = document.getElementById('emptyState');

        if (pageCount) pageCount.textContent = pageLinks.length;
        const moduleCountEl = document.getElementById('moduleCount');
        if (moduleCountEl) moduleCountEl.textContent = modules.length;

        if (pageSearch) {
            pageSearch.addEventListener('input', function () {
                const query = this.value.trim().toLowerCase();
                let visiblePages = 0;

                modules.querySelectorAll ? modules.forEach(function (module) {
                    const links = module.querySelectorAll('.page-item-card[data-search]');
                    let moduleHasResults = false;

                    links.forEach(function (link) {
                        const matches = link.dataset.search.includes(query);
                        link.style.display = matches ? 'flex' : 'none';

                        if (matches) {
                            moduleHasResults = true;
                            visiblePages++;
                        }
                    });

                    module.style.display = moduleHasResults ? 'block' : 'none';
                }) : null;

                if (pageCount) pageCount.textContent = visiblePages;
                if (emptyState) emptyState.style.display = visiblePages === 0 ? 'block' : 'none';
            });
        }
    });
</script>
@endpush