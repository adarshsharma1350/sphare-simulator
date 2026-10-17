
"use strict";

/*
 * Sphare Simulator — Telemetry
 *
 * Current mode: Static demo simulation
 * Future mode: Flask / pymavlink telemetry API
 */

function updateTelemetry() {
    const altitudeElement = document.getElementById("altitude");
    const speedElement = document.getElementById("speed");
    const headingElement = document.getElementById("heading");
    const rollElement = document.getElementById("roll");
    const pitchElement = document.getElementById("pitch");
    const yawElement = document.getElementById("yaw");
    const lastUpdateElement = document.getElementById("lastUpdate");

    if (!altitudeElement || !speedElement || !headingElement) {
        return;
    }

    const altitude = 12.0 + Math.random() * 1.2;
    const speed = 4.4 + Math.random() * 0.8;
    const heading = 126 + Math.random() * 4;
    const roll = -2 + Math.random() * 5;
    const pitch = -2 + Math.random() * 4;

    altitudeElement.textContent = altitude.toFixed(1);
    speedElement.textContent = speed.toFixed(1);
    headingElement.textContent = heading.toFixed(0);

    if (rollElement) {
        rollElement.textContent =
            (roll >= 0 ? "+" : "") + roll.toFixed(1) + "°";
    }

    if (pitchElement) {
        pitchElement.textContent =
            (pitch >= 0 ? "+" : "") + pitch.toFixed(1) + "°";
    }

    if (yawElement) {
        yawElement.textContent = heading.toFixed(1) + "°";
    }

    if (lastUpdateElement) {
        lastUpdateElement.textContent =
            new Date().toLocaleTimeString();
    }
}

// Demo updates only; not real vehicle telemetry.
updateTelemetry();
setInterval(updateTelemetry, 1000);
