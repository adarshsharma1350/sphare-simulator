
# 🚁 Sphare Simulator

<p center>
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel" />
  <img src="https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Blade" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/Drone_Control-000000?style=for-the-badge&logo=drone&logoColor=white" alt="Drone" />
</p>

> A modular, high-performance web dashboard for drone telemetry, flight simulation, real-time navigation, vehicle configuration, diagnostics, and safety automation.

---

## 📋 Table of Contents
- [🚁 Sphare Simulator](#-sphare-simulator)
  - [📋 Table of Contents](#-table-of-contents)
  - [🚀 Project Overview](#-project-overview)
    - [Key Highlights](#key-highlights)
  - [🗂️ Architecture \& Modules](#️-architecture--modules)
  - [📑 Module Progress Tracker](#-module-progress-tracker)
  - [🛣️ Development Roadmap](#️-development-roadmap)
    - [Phase 1 — College Demonstration Essentials](#phase-1--college-demonstration-essentials)
    - [Phase 2 — Core Operations \& Reliability](#phase-2--core-operations--reliability)
    - [Phase 3 — Advanced Features \& AI](#phase-3--advanced-features--ai)
  - [🧱 Development Guidelines](#-development-guidelines)
  - [▶️ Running the Project](#️-running-the-project)
  - [✅ Demo Readiness Checklist](#-demo-readiness-checklist)
  - [🛡️ Safety Note](#️-safety-note)
    - [⚡ Powered by **Coodig Sphare** | **Sphare**](#-powered-by-coodig-sphare--sphare)

---

## 🚀 Project Overview

**Sphare Simulator** is designed to unify all aspects of drone control and telemetry into a single, cohesive dashboard interface. Built with **Laravel and Blade**, it organizes complex vehicle operations—ranging from manual RC flight and mission planning to AI vision and geofencing—into modular, lightweight views.

### Key Highlights
- **Real-Time Telemetry & Tracking:** Live flight stats, GPS positional data, and vector maps.
- **Mission Planning:** Automated waypoints, flight history logs, and instant mission replay.
- **Vehicle Configuration:** Sensor calibration, firmware updates, battery monitoring, and payload control.
- **Advanced Vision Systems:** Thermal views, 3D visualization, and gesture-based control interfaces.
- **Safety & Failsafe:** Autonomous geofencing, dynamic emergency protocols, and airspace compliance.

---

## 🗂️ Architecture & Modules

The application interface is segmented into **9 core modules** within the Laravel Blade framework:

| # | Module | Core Responsibility | Example Views |
|---|---|---|---|
| **01** | `overview` | Primary telemetry summary, landing page, and operational dashboard | `home`, `index`, `dashboard` |
| **02** | `flight_operations` | Manual controls, mission planning, simulation, and swarm management | `remote_control`, `flight_control`, `mission_planner`, `simulator` |
| **03** | `vehicle_setup` | Hardware calibration, parameters, firmware upgrades, and accessories | `calibration`, `parameters`, `battery`, `gimbal` |
| **04** | `navigation_environment` | GPS map overlays, weather, telemetry metrics, and obstacle avoidance | `gps`, `maps`, `telemetry`, `weather`, `airspace` |
| **05** | `vision_imaging` | FPV video streaming, thermal overlays, gesture control, and AI vision | `camera_fpv`, `ai_vision`, `3d_view`, `gesture_control` |
| **06** | `monitoring_diagnostics` | System logs, live health metrics, analytics, and storage monitors | `system_health`, `analytics`, `eventlogs`, `api_monitor` |
| **07** | `safety` | Boundary limits, failsafe triggers, and emergency abort routines | `failsafe`, `geofence` |
| **08** | `developer_tools` | Command-line interface (CLI), automation hooks, and system settings | `cli`, `developer`, `automation`, `settings` |
| **09** | `help_documentation` | User guides, API references, onboarding, and project policies | `getting_started`, `documentation`, `support`, `faqs` |

---

## 📑 Module Progress Tracker

Mark pages as complete (`[x]`) as you build and integrate them into your project.

```text
resources/views/
├── welcome.blade.php
|
├── 01 — overview/
│   ├── [ ] home.blade.php
│   ├── [ ] index.blade.php
│   |── [ ] dashboard.blade.php
│   └── [ ] getting-started.blade.php
│
├── 02 — flight_operations/
│   ├── [ ] rc_controller.blade.php
│   ├── [ ] joystick.blade.php
│   ├── [ ] remote_control.blade.php
│   ├── [ ] flight_control.blade.php
│   ├── [ ] command_center.blade.php
│   ├── [ ] simulator.blade.php
│   ├── [ ] preflight.blade.php
│   ├── [ ] mission_planner.blade.php
│   ├── [ ] mission_library.blade.php
│   ├── [ ] flight_history.blade.php
│   ├── [ ] replay.blade.php
│   ├── [ ] multi_drone.blade.php
│   └── [ ] swarm.blade.php
│
├── 03 — vehicle_setup/
│   ├── [ ] calibration.blade.php
│   ├── [ ] parameters.blade.php
│   ├── [ ] firmware.blade.php
│   ├── [ ] vehicle_setup.blade.php
│   ├── [ ] battery.blade.php
│   ├── [ ] gimbal.blade.php
│   └── [ ] payload.blade.php
│
├── 04 — navigation_environment/
│   ├── [ ] compass.blade.php
│   ├── [ ] network.blade.php
│   ├── [ ] connection.blade.php
│   ├── [ ] gps.blade.php
│   ├── [ ] maps.blade.php
│   ├── [ ] telemetry.blade.php
│   ├── [ ] airspace.blade.php
│   ├── [ ] range_finder.blade.php
│   ├── [ ] terrain.blade.php
│   ├── [ ] weather.blade.php
│   ├── [ ] obstacle_avoidance.blade.php
│   └── [ ] agriculture.blade.php
│
├── 05 — vision_imaging/
│   ├── [ ] ai_vision.blade.php
│   ├── [ ] camera_fpv.blade.php
│   ├── [ ] thermal.blade.php
│   ├── [ ] 3d_view.blade.php
│   └── [ ] gesture_control.blade.php
│
├── 06 — monitoring_diagnostics/
│   ├── [ ] analytics.blade.php
│   ├── [ ] api_monitor.blade.php
│   ├── [ ] logs.blade.php
│   ├── [ ] eventlogs.blade.php
│   ├── [ ] storage.blade.php
│   ├── [ ] notifications.blade.php
│   ├── [ ] system_health.blade.php
│   ├── [ ] status.blade.php
│   └── [ ] system_info.blade.php
│
├── 07 — safety/
│   ├── [ ] failsafe.blade.php
│   └── [ ] geofence.blade.php
│
├── 08 — developer_tools/
│   ├── [ ] automation.blade.php
│   ├── [ ] developer.blade.php
│   ├── [ ] cli.blade.php
│   ├── [ ] settings.blade.php
│   └── [ ] shortcuts.blade.php
│
└── 09 — help_documentation/
    ├── [ ] about.blade.php
    ├── [ ] changelog.blade.php
    ├── [ ] contact_us.blade.php
    ├── [ ] documentation.blade.php
    ├── [ ] faqs.blade.php
    ├── [ ] features.blade.php
    ├── [ ] feedback.blade.php
    ├── [ ] getting_started.blade.php
    ├── [ ] help.blade.php
    ├── [ ] licenses.blade.php
    ├── [ ] privacy.blade.php
    ├── [ ] support.blade.php
    └── [ ] terms.blade.php
```

---

## 🛣️ Development Roadmap

### Phase 1 — College Demonstration Essentials
- [ ] Home View & Main Dashboard
- [ ] Manual Remote Control Interface
- [ ] Developer CLI Terminal
- [ ] Live Telemetry Display
- [ ] GPS Mapping & Positioning
- [ ] Basic Geofencing Boundaries

### Phase 2 — Core Operations & Reliability
- [ ] Advanced Flight Control Systems
- [ ] Network & Connection Monitoring
- [ ] Real-Time Battery Diagnostics
- [ ] Preflight Checklists & Validations
- [ ] Automated Failsafe Triggers
- [ ] System Event Logging

### Phase 3 — Advanced Features & AI
- [ ] Mission Planner & Autonomous Waypoints
- [ ] Flight History & Interactive Replay
- [ ] Camera FPV Streaming & Computer Vision / AI
- [ ] Gesture Control Interface
- [ ] Analytics Dashboard & Flight Automation
- [ ] Multi-Drone Swarm Capabilities

---

## 🧱 Development Guidelines

1. **Modular Architecture:** Place new pages in their designated module folder.
2. **Component Reusability:** Maintain consistent UI styling across all Blade views using shared layouts and components.
3. **Data Authenticity:** Clearly distinguish between **Simulated Data**, **Live Hardware Telemetry**, and **Offline Placeholders**.
4. **Clean Route Naming:** Use clear, predictable dot notation for Laravel views (e.g., `view('flight_operations.simulator')`).

---

## ▶️ Running the Project

1. Clone or extract the repository to your environment.
2. Install dependencies (if applicable):
   ```bash
   composer install
   npm install && npm run dev
   ```
3. Start the local server:
   ```bash
   php artisan serve
   ```
4. Access the dashboard in your browser:
   ```text
   http://127.0.0.1:8000
   ```

---

## ✅ Demo Readiness Checklist

- [ ] Laravel development server starts with zero console errors.
- [ ] All declared Blade routes load successfully.
- [ ] Dashboard telemetry widgets respond gracefully.
- [ ] Remote control commands work as expected in simulation.
- [ ] GPS and map components load and handle missing markers smoothly.
- [ ] Failsafe and emergency disarm controls are quickly accessible.

---

## 🛡️ Safety Note

> **Important:** Always test flight commands in software simulation mode prior to physical hardware integration. Web dashboard interfaces should complement, not replace, mandatory hardware-level failsafes and local civil aviation regulatory rules.

---

<br>

<div align="center">

### ⚡ Powered by **Coodig Sphare** | **Sphare**

*A modular drone simulator and control solution built with Laravel & Blade.*

</div>