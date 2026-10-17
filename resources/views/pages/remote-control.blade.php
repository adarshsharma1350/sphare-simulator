@extends('layouts.app')

@section('title', 'Remote Control | Sphare Simulator')

@push('styles')
    {{--
    <link rel="stylesheet" href="{{ asset('css/remote-control.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/remote-control.css') }}">
@endpush

@section('content')

    <!-- ================= MAIN ================= -->

    <main class="container">

        <header class="header">

            <div>
                <div class="eyebrow">Manual Flight Operations</div>
                <h1>Remote Control Center</h1>
                <p class="subtitle">
                    Virtual controller • Flight commands • Vehicle state • Safety controls
                </p>
            </div>

            <div class="actions">
                <button class="btn" onclick="openControllerSettings()">Controller Settings</button>
                <button class="btn" onclick="centerSticks()">Center Sticks</button>
                <button class="btn success" onclick="runPreflight()">Pre-Flight Check</button>
            </div>

        </header>


        <!-- ================= KPI ================= -->

        <section class="kpis">

            <div class="card kpi">
                <div class="kpi-label">Vehicle</div>
                <div class="kpi-value blue">SPHARE</div>
                <div class="kpi-sub">SITL / System 1</div>
            </div>

            <div class="card kpi">
                <div class="kpi-label">Flight Mode</div>
                <div class="kpi-value" id="modeValue">GUIDED</div>
                <div class="kpi-sub">MAVLink mode</div>
            </div>

            <div class="card kpi">
                <div class="kpi-label">Arm State</div>
                <div class="kpi-value good" id="armValue">ARMED</div>
                <div class="kpi-sub">Safety state</div>
            </div>

            <div class="card kpi">
                <div class="kpi-label">Altitude</div>
                <div class="kpi-value" id="altValue">82.4 m</div>
                <div class="kpi-sub">Relative altitude</div>
            </div>

            <div class="card kpi">
                <div class="kpi-label">Ground Speed</div>
                <div class="kpi-value" id="speedValue">12.8 m/s</div>
                <div class="kpi-sub">Current velocity</div>
            </div>

            <div class="card kpi">
                <div class="kpi-label">Battery</div>
                <div class="kpi-value good" id="batteryValue">78%</div>
                <div class="kpi-sub">16.4 V • 4S</div>
            </div>

        </section>


        <!-- ================= STATUS ================= -->

        <div class="status-banner">

            <div class="status-main">

                <div class="status-icon">✓</div>

                <div>
                    <strong id="statusTitle">Remote Control Ready</strong>
                    <span id="statusText">
                        Controller link active • Vehicle responding normally
                    </span>
                </div>

            </div>

            <div class="actions">
                <button class="btn" onclick="toggleSafetyLock()" id="safetyButton">
                    Safety Lock: OFF
                </button>
            </div>

        </div>


        <!-- ================= REMOTE GRID ================= -->

        <section class="remote-grid">


            <!-- CONTROLLER -->

            <div class="card section controller">

                <div class="section-title">
                    <h2>Virtual Flight Controller</h2>
                    <span id="controllerState">LIVE INPUT</span>
                </div>

                <div class="joystick-area">

                    <!-- LEFT -->

                    <div class="joystick-wrap">

                        <div class="joystick" id="leftJoystick" data-stick="left">

                            <span class="axis-label top">THROTTLE ↑</span>
                            <span class="axis-label bottom">↓</span>
                            <span class="axis-label left">YAW L</span>
                            <span class="axis-label right">YAW R</span>

                            <div class="jstick" id="leftStick"></div>

                        </div>

                        <div class="joystick-name">LEFT STICK</div>
                        <div class="joystick-value" id="leftValue">
                            Throttle 50% • Yaw 0%
                        </div>

                    </div>


                    <!-- RIGHT -->

                    <div class="joystick-wrap">

                        <div class="joystick" id="rightJoystick" data-stick="right">

                            <span class="axis-label top">FORWARD ↑</span>
                            <span class="axis-label bottom">BACK ↓</span>
                            <span class="axis-label left">← LEFT</span>
                            <span class="axis-label right">RIGHT →</span>

                            <div class="jstick" id="rightStick"></div>

                        </div>

                        <div class="joystick-name">RIGHT STICK</div>
                        <div class="joystick-value" id="rightValue">
                            Pitch 0% • Roll 0%
                        </div>

                    </div>

                </div>


                <!-- Controller buttons -->

                <div class="action-grid">

                    <button class="action-btn" onclick="quickCommand('HOVER')">
                        ⦿ HOVER
                    </button>

                    <button class="action-btn" onclick="quickCommand('BRAKE')">
                        ◈ BRAKE
                    </button>

                    <button class="action-btn" onclick="quickCommand('RTL')">
                        ↩ RETURN TO HOME
                    </button>

                    <button class="action-btn land" onclick="quickCommand('LAND')">
                        ↓ LAND
                    </button>

                </div>

            </div>


            <!-- FLIGHT CONTROL -->

            <div class="card section center-control">

                <div class="section-title">
                    <h2>Flight Control</h2>
                    <span>COMMANDS</span>
                </div>


                <div class="control-block">

                    <div class="control-label">Flight Mode</div>

                    <div class="mode-grid">

                        <button class="mode-btn active" onclick="setMode('GUIDED',this)">
                            GUIDED
                        </button>

                        <button class="mode-btn" onclick="setMode('STABILIZE',this)">
                            STABILIZE
                        </button>

                        <button class="mode-btn" onclick="setMode('LOITER',this)">
                            LOITER
                        </button>

                        <button class="mode-btn" onclick="setMode('ALT HOLD',this)">
                            ALT HOLD
                        </button>

                        <button class="mode-btn" onclick="setMode('AUTO',this)">
                            AUTO
                        </button>

                        <button class="mode-btn" onclick="setMode('RTL',this)">
                            RTL
                        </button>

                    </div>

                </div>


                <div class="control-block">

                    <div class="control-label">Vehicle Actions</div>

                    <div class="action-grid">

                        <button class="action-btn arm" onclick="armVehicle()">
                            ARM
                        </button>

                        <button class="action-btn" onclick="disarmVehicle()">
                            DISARM
                        </button>

                        <button class="action-btn" onclick="takeoff()">
                            TAKEOFF
                        </button>

                        <button class="action-btn land" onclick="landVehicle()">
                            LAND
                        </button>

                    </div>

                </div>


                <div class="control-block">

                    <div class="control-label">Direction Pad</div>

                    <div class="dpad">

                        <div></div>

                        <button onclick="direction('FORWARD')">▲</button>

                        <div></div>

                        <button onclick="direction('LEFT')">◀</button>

                        <button class="center" onclick="direction('HOLD')">●</button>

                        <button onclick="direction('RIGHT')">▶</button>

                        <div></div>

                        <button onclick="direction('BACK')">▼</button>

                        <div></div>

                    </div>

                </div>


                <button class="emergency" onclick="emergencyLand()">
                    ⚠ EMERGENCY LAND
                </button>

            </div>


            <!-- TELEMETRY -->

            <div class="card section">

                <div class="section-title">
                    <h2>Live Telemetry</h2>
                    <span>1.8s UPDATE</span>
                </div>

                <div class="telemetry-list">

                    <div class="telemetry-row">
                        <span>Latitude</span>
                        <strong id="lat">26.449900°</strong>
                    </div>

                    <div class="telemetry-row">
                        <span>Longitude</span>
                        <strong id="lon">80.331900°</strong>
                    </div>

                    <div class="telemetry-row">
                        <span>Heading</span>
                        <strong id="heading">048°</strong>
                    </div>

                    <div class="telemetry-row">
                        <span>Vertical Speed</span>
                        <strong id="verticalSpeed">+0.4 m/s</strong>
                    </div>

                    <div class="telemetry-row">
                        <span>GPS</span>
                        <strong id="gps">18 SAT</strong>
                    </div>

                    <div class="telemetry-row">
                        <span>HDOP</span>
                        <strong id="hdop">0.8</strong>
                    </div>

                    <div class="telemetry-row">
                        <span>Signal</span>
                        <strong id="signalValue">96%</strong>
                    </div>

                </div>


                <div class="signal">

                    <div class="signal-head">
                        <span>MAVLink Signal</span>
                        <strong id="signalText">96%</strong>
                    </div>

                    <div class="bar">
                        <div id="signalBar" style="width:96%"></div>
                    </div>

                </div>


                <div class="signal">

                    <div class="signal-head">
                        <span>Controller Input</span>
                        <strong id="inputText">ACTIVE</strong>
                    </div>

                    <div class="bar">
                        <div id="inputBar" style="width:82%"></div>
                    </div>

                </div>

            </div>

        </section>


        <!-- ================= BOTTOM ================= -->

        <section class="bottom-grid">


            <!-- QUICK COMMANDS -->

            <div class="card section">

                <div class="section-title">
                    <h2>Quick Commands</h2>
                    <span>REMOTE</span>
                </div>

                <div class="quick-command">

                    <button onclick="quickCommand('HOVER')">HOVER</button>
                    <button onclick="quickCommand('FORWARD')">FORWARD</button>
                    <button onclick="quickCommand('BACK')">BACK</button>
                    <button onclick="quickCommand('LEFT')">LEFT</button>
                    <button onclick="quickCommand('RIGHT')">RIGHT</button>
                    <button onclick="quickCommand('YAW LEFT')">YAW LEFT</button>
                    <button onclick="quickCommand('YAW RIGHT')">YAW RIGHT</button>
                    <button onclick="quickCommand('RTL')">RTL</button>

                </div>

            </div>


            <!-- SAFETY -->

            <div class="card section">

                <div class="section-title">
                    <h2>Safety Gates</h2>
                    <span>PRE-FLIGHT</span>
                </div>

                <div class="safety-list">

                    <div class="safety-row">
                        <div class="safety-check">✓</div>
                        <div>
                            <strong>Vehicle State</strong>
                            <span>Ready / Responsive</span>
                        </div>
                    </div>

                    <div class="safety-row">
                        <div class="safety-check">✓</div>
                        <div>
                            <strong>Battery</strong>
                            <span>78% • Normal</span>
                        </div>
                    </div>

                    <div class="safety-row">
                        <div class="safety-check">✓</div>
                        <div>
                            <strong>GPS / EKF</strong>
                            <span>18 satellites • Valid</span>
                        </div>
                    </div>

                    <div class="safety-row">
                        <div class="safety-check">✓</div>
                        <div>
                            <strong>Geofence</strong>
                            <span>Active • No breach</span>
                        </div>
                    </div>

                    <div class="safety-row">
                        <div class="safety-check">✓</div>
                        <div>
                            <strong>Failsafe</strong>
                            <span>Configured</span>
                        </div>
                    </div>

                </div>

            </div>


            <!-- EVENT LOG -->

            <div class="card section">

                <div class="section-title">

                    <h2>Remote Event Log</h2>

                    <button class="btn" style="padding:6px 9px;font-size:9px" onclick="clearEvents()">
                        Clear
                    </button>

                </div>

                <div class="event-log" id="eventLog">

                    <div class="event">
                        <div class="event-time">16:21</div>
                        <div class="event-text">
                            <b>CONNECTED</b> — MAVLink controller link established
                        </div>
                    </div>

                    <div class="event">
                        <div class="event-time">16:20</div>
                        <div class="event-text">
                            <b>GUIDED</b> — Vehicle mode selected
                        </div>
                    </div>

                    <div class="event">
                        <div class="event-time">16:19</div>
                        <div class="event-text">
                            <b>ARMED</b> — Vehicle armed successfully
                        </div>
                    </div>

                    <div class="event">
                        <div class="event-time">16:18</div>
                        <div class="event-text">
                            <b>SAFETY</b> — Pre-flight checks passed
                        </div>
                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- ================= SETTINGS MODAL ================= -->

    <div class="modal" id="settingsModal">

        <div class="modal-box">

            <div class="modal-head">

                <h3>Remote Controller Settings</h3>

                <button class="close" onclick="closeControllerSettings()">×</button>

            </div>

            <div class="form-grid">

                <div class="form-group">
                    <label>Controller Name</label>
                    <input id="controllerName" value="SPHARE Virtual RC">
                </div>

                <div class="form-group">
                    <label>Input Protocol</label>
                    <select id="protocol">
                        <option>MAVLink RC Override</option>
                        <option>Virtual Joystick</option>
                        <option>Gamepad API</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Response Rate</label>
                    <select id="responseRate">
                        <option>20 Hz</option>
                        <option selected>30 Hz</option>
                        <option>50 Hz</option>
                        <option>100 Hz</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Deadzone</label>
                    <input id="deadzone" value="5" type="number" min="0" max="30">
                </div>

                <div class="form-group">
                    <label>Expo</label>
                    <input id="expo" value="20" type="number" min="0" max="100">
                </div>

                <div class="form-group">
                    <label>Failsafe Action</label>
                    <select id="failsafeAction">
                        <option>RTL</option>
                        <option>LAND</option>
                        <option>HOLD</option>
                        <option>BRAKE</option>
                    </select>
                </div>

            </div>

            <div class="modal-actions">

                <button class="btn" onclick="closeControllerSettings()">
                    Cancel
                </button>

                <button class="btn primary" onclick="saveControllerSettings()">
                    Save Settings
                </button>

            </div>

        </div>

    </div>


    <!-- ================= PREFLIGHT MODAL ================= -->

    <div class="modal" id="preflightModal">

        <div class="modal-box">

            <div class="modal-head">

                <h3>Pre-Flight Safety Check</h3>

                <button class="close" onclick="closePreflight()">×</button>

            </div>

            <div class="safety-list">

                <div class="safety-row">
                    <div class="safety-check">✓</div>
                    <div>
                        <strong>MAVLink Connection</strong>
                        <span>127.0.0.1:14551 connected</span>
                    </div>
                </div>

                <div class="safety-row">
                    <div class="safety-check">✓</div>
                    <div>
                        <strong>GPS / EKF</strong>
                        <span>3D Fix • 18 satellites • EKF valid</span>
                    </div>
                </div>

                <div class="safety-row">
                    <div class="safety-check">✓</div>
                    <div>
                        <strong>Battery</strong>
                        <span>78% • 16.4V • healthy</span>
                    </div>
                </div>

                <div class="safety-row">
                    <div class="safety-check">✓</div>
                    <div>
                        <strong>Geofence</strong>
                        <span>Configured and active</span>
                    </div>
                </div>

                <div class="safety-row">
                    <div class="safety-check">✓</div>
                    <div>
                        <strong>Failsafe</strong>
                        <span>RTL configured</span>
                    </div>
                </div>

            </div>

            <div class="modal-actions">

                <button class="btn success" onclick="closePreflight()">
                    All Checks Passed
                </button>

            </div>

        </div>

    </div>


@endsection

@push('scripts')
    <script src="{{ asset('js/remote-control.js') }}" defer></script>
@endpush
