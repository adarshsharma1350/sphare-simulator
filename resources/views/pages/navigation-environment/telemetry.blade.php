@extends('layouts.app')

@section('title', 'Telemetry | Sphare Simulator')

@push('styles')
    {{--
    <link rel="stylesheet" href="{{ asset('css/remote-control.css') }}"> --}}
    {{--
    <link rel="stylesheet" href="{{ asset('css/remote-control.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/telemetry.css') }}">
@endpush

@section('content')

    <main class="container">


        <div class="page-heading">

            <div>

                <h1>
                    Telemetry
                </h1>

                <p>
                    Real-time flight data, navigation,
                    vehicle health and MAVLink telemetry.
                </p>

            </div>


            <div class="live-indicator">

                <span class="live-dot"></span>

                LIVE TELEMETRY

            </div>

        </div>



        <!-- =====================================================
             TOP METRICS
        ====================================================== -->

        <section class="metric-grid">


            <div class="panel metric">

                <span class="metric-label">
                    Altitude
                </span>

                <div class="metric-value">
                    <span id="altitude">
                        12.4
                    </span>

                    <span class="metric-unit">
                        m
                    </span>
                </div>

                <div class="metric-status">
                    ▲ +0.2 m/s
                </div>

            </div>


            <div class="panel metric">

                <span class="metric-label">
                    Ground Speed
                </span>

                <div class="metric-value">
                    <span id="speed">
                        4.8
                    </span>

                    <span class="metric-unit">
                        m/s
                    </span>
                </div>

                <div class="metric-status">
                    ● STABLE
                </div>

            </div>


            <div class="panel metric">

                <span class="metric-label">
                    Heading
                </span>

                <div class="metric-value">
                    <span id="heading">
                        128
                    </span>

                    <span class="metric-unit">
                        °
                    </span>
                </div>

                <div class="metric-status">
                    NE
                </div>

            </div>


            <div class="panel metric">

                <span class="metric-label">
                    Battery
                </span>

                <div class="metric-value">
                    <span id="battery">
                        78
                    </span>

                    <span class="metric-unit">
                        %
                    </span>
                </div>

                <div class="metric-status">
                    15.7 V
                </div>

            </div>


            <div class="panel metric">

                <span class="metric-label">
                    Satellites
                </span>

                <div class="metric-value">
                    <span id="satellites">
                        12
                    </span>
                </div>

                <div class="metric-status">
                    3D FIX
                </div>

            </div>


            <div class="panel metric">

                <span class="metric-label">
                    Flight Mode
                </span>

                <div class="metric-value" style="font-size:20px;" id="flightMode">
                    GUIDED
                </div>

                <div class="metric-status">
                    ACTIVE
                </div>

            </div>

        </section>



        <!-- =====================================================
             ATTITUDE + GPS
        ====================================================== -->

        <section class="main-grid">


            <!-- ATTITUDE -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        Attitude & Orientation
                    </h2>

                    <span>
                        ATTITUDE DATA
                    </span>

                </div>


                <div class="attitude">

                    <div class="attitude-circle">

                        <div class="pitch-lines"></div>

                        <div class="drone-marker"></div>

                    </div>


                    <div class="attitude-info">


                        <div class="attitude-data">

                            <small>
                                ROLL
                            </small>

                            <strong id="roll">
                                +2.4°
                            </strong>

                        </div>


                        <div class="attitude-data">

                            <small>
                                PITCH
                            </small>

                            <strong id="pitch">
                                -1.8°
                            </strong>

                        </div>


                        <div class="attitude-data">

                            <small>
                                YAW
                            </small>

                            <strong id="yaw">
                                128.2°
                            </strong>

                        </div>


                        <div class="attitude-data">

                            <small>
                                CLIMB
                            </small>

                            <strong id="climb">
                                +0.2 m/s
                            </strong>

                        </div>

                    </div>

                </div>

            </div>



            <!-- GPS -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        GPS Navigation
                    </h2>

                    <span>
                        POSITION
                    </span>

                </div>


                <div class="gps-card">


                    <div class="gps-position">

                        <div class="gps-icon">
                            ◎
                        </div>

                        <div class="gps-fix">
                            ● 3D GPS FIX
                        </div>

                        <div style="
                            color:var(--muted);
                            font-size:10px;
                            margin-top:5px;
                            ">
                            Navigation solution healthy
                        </div>

                    </div>


                    <div class="coordinates">


                        <div class="coordinate">

                            <small>
                                LATITUDE
                            </small>

                            <strong id="latitude">
                                26.4499°
                            </strong>

                        </div>


                        <div class="coordinate">

                            <small>
                                LONGITUDE
                            </small>

                            <strong id="longitude">
                                80.3319°
                            </strong>

                        </div>


                        <div class="coordinate">

                            <small>
                                ALTITUDE AMSL
                            </small>

                            <strong>
                                145.8 m
                            </strong>

                        </div>


                        <div class="coordinate">

                            <small>
                                HDOP
                            </small>

                            <strong>
                                0.72
                            </strong>

                        </div>


                        <div class="coordinate">

                            <small>
                                VDOP
                            </small>

                            <strong>
                                1.04
                            </strong>

                        </div>


                        <div class="coordinate">

                            <small>
                                GPS UPDATE
                            </small>

                            <strong>
                                5 Hz
                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             BATTERY / HEALTH / SIGNAL
        ====================================================== -->

        <section class="secondary-grid">


            <!-- BATTERY -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        Battery
                    </h2>

                    <span>
                        POWER SYSTEM
                    </span>

                </div>


                <div class="card-body">

                    <div class="battery-header">

                        <div>

                            <div class="battery-percent" id="batteryLarge">
                                78%
                            </div>

                            <span style="
                                color:var(--muted);
                                font-size:10px;
                                ">
                                Remaining capacity
                            </span>

                        </div>


                        <div class="battery-icon">
                            🔋
                        </div>

                    </div>


                    <div class="progress">

                        <div class="progress-fill" id="batteryBar"></div>

                    </div>


                    <div class="battery-stats">


                        <div class="mini-stat">

                            <small>
                                VOLTAGE
                            </small>

                            <strong>
                                15.7 V
                            </strong>

                        </div>


                        <div class="mini-stat">

                            <small>
                                CURRENT
                            </small>

                            <strong>
                                4.2 A
                            </strong>

                        </div>


                        <div class="mini-stat">

                            <small>
                                POWER
                            </small>

                            <strong>
                                65.9 W
                            </strong>

                        </div>


                        <div class="mini-stat">

                            <small>
                                STATUS
                            </small>

                            <strong style="color:var(--green);">
                                HEALTHY
                            </strong>

                        </div>

                    </div>

                </div>

            </div>



            <!-- SYSTEM HEALTH -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        System Health
                    </h2>

                    <span>
                        VEHICLE CHECK
                    </span>

                </div>


                <div class="card-body">

                    <div class="health-list">


                        <div class="health-row">

                            <div class="health-name">

                                <span class="health-dot"></span>

                                Flight Controller

                            </div>

                            <span class="health-value">
                                OK
                            </span>

                        </div>


                        <div class="health-row">

                            <div class="health-name">

                                <span class="health-dot"></span>

                                GPS

                            </div>

                            <span class="health-value">
                                OK
                            </span>

                        </div>


                        <div class="health-row">

                            <div class="health-name">

                                <span class="health-dot"></span>

                                IMU

                            </div>

                            <span class="health-value">
                                OK
                            </span>

                        </div>


                        <div class="health-row">

                            <div class="health-name">

                                <span class="health-dot"></span>

                                Compass

                            </div>

                            <span class="health-value">
                                OK
                            </span>

                        </div>


                        <div class="health-row">

                            <div class="health-name">

                                <span class="health-dot"></span>

                                EKF

                            </div>

                            <span class="health-value">
                                HEALTHY
                            </span>

                        </div>


                        <div class="health-row">

                            <div class="health-name">

                                <span class="health-dot"></span>

                                MAVLink

                            </div>

                            <span class="health-value">
                                CONNECTED
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- SIGNAL -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        Communication
                    </h2>

                    <span>
                        LINK STATUS
                    </span>

                </div>


                <div class="card-body">


                    <div class="signal-bars">

                        <span class="bar"></span>

                        <span class="bar"></span>

                        <span class="bar"></span>

                        <span class="bar"></span>

                        <span class="bar"></span>

                    </div>


                    <div class="signal-value" id="signal">
                        98%
                    </div>


                    <div class="signal-label">
                        MAVLink Link Quality
                    </div>


                    <div style="
                        margin-top:20px;
                        display:grid;
                        gap:10px;
                        ">


                        <div class="mini-stat">

                            <small>
                                PACKETS RECEIVED
                            </small>

                            <strong>
                                12,482
                            </strong>

                        </div>


                        <div class="mini-stat">

                            <small>
                                PACKET LOSS
                            </small>

                            <strong style="color:var(--green);">
                                0.02%
                            </strong>

                        </div>


                        <div class="mini-stat">

                            <small>
                                UPDATE RATE
                            </small>

                            <strong>
                                10 Hz
                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =====================================================
             MAVLINK MESSAGE MONITOR
        ====================================================== -->

        <section class="panel">

            <div class="panel-header">

                <h2>
                    MAVLink Message Monitor
                </h2>

                <span>
                    LIVE MESSAGE STREAM
                </span>

            </div>


            <table class="data-table">

                <thead>

                    <tr>

                        <th>
                            TIME
                        </th>

                        <th>
                            MESSAGE
                        </th>

                        <th>
                            DATA
                        </th>

                        <th>
                            STATUS
                        </th>

                    </tr>

                </thead>


                <tbody id="messageTable">


                    <tr>

                        <td class="message-time">
                            07:31:42
                        </td>

                        <td>
                            <span class="message-type">
                                HEARTBEAT
                            </span>
                        </td>

                        <td>
                            System 1 / Component 1
                        </td>

                        <td style="color:var(--green);">
                            RECEIVED
                        </td>

                    </tr>


                    <tr>

                        <td class="message-time">
                            07:31:41
                        </td>

                        <td>
                            <span class="message-type">
                                GLOBAL_POSITION
                            </span>
                        </td>

                        <td>
                            Lat 26.4499 / Lon 80.3319
                        </td>

                        <td style="color:var(--green);">
                            RECEIVED
                        </td>

                    </tr>


                    <tr>

                        <td class="message-time">
                            07:31:41
                        </td>

                        <td>
                            <span class="message-type">
                                ATTITUDE
                            </span>
                        </td>

                        <td>
                            Roll +2.4 / Pitch -1.8 / Yaw 128.2
                        </td>

                        <td style="color:var(--green);">
                            RECEIVED
                        </td>

                    </tr>


                    <tr>

                        <td class="message-time">
                            07:31:40
                        </td>

                        <td>
                            <span class="message-type">
                                SYS_STATUS
                            </span>
                        </td>

                        <td>
                            Battery 78% / 15.7V
                        </td>

                        <td style="color:var(--green);">
                            RECEIVED
                        </td>

                    </tr>


                </tbody>

            </table>

        </section>





    </main>
@endsection

@push('scripts')
    <script src="{{ asset('js/telemetry.js') }}"></script>
@endpush
