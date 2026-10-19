@extends('layouts.app')

@section('title', 'Getting Started — Sphare Simulator')

@section('content')
<main class="main-container">

    <!-- Page Header -->
    <header class="section-heading reveal">
        <div>
            <div class="section-eyebrow">HELP &amp; ONBOARDING</div>
            <h1>Getting <span class="text-highlight">Started</span></h1>
            <p class="hero-description getting-started-desc">
                Quickly set up your environment, launch the local server, and begin exploring 
                the Sphare Simulator ecosystem.
            </p>
        </div>

        <div class="header-actions">
            <a class="btn btn-secondary" href="{{ url('/pages/help_documentation/documentation') }}">
                View Documentation →
            </a>
        </div>
    </header>


    <!-- Quick Steps Grid -->
    <div class="card-grid reveal">
        <div class="card getting-started-card">
            <div class="icon-box bg-blue-soft getting-started-icon">01</div>
            <h3>Installation</h3>
            <p class="getting-started-text">
                Clone or extract the repository, then install your PHP and Node dependencies using composer and npm.
            </p>
            <div class="code-box">
                <code>composer install</code>
                <code>npm install &amp;&amp; npm run dev</code>
            </div>
        </div>

        <div class="card getting-started-card">
            <div class="icon-box bg-cyan-soft getting-started-icon">02</div>
            <h3>Launch Server</h3>
            <p class="getting-started-text">
                Start your local Laravel development server to serve the application views and route handles.
            </p>
            <div class="code-box">
                <code>php artisan serve</code>
            </div>
        </div>

        <div class="card getting-started-card">
            <div class="icon-box bg-green-soft getting-started-icon">03</div>
            <h3>Explore Dashboard</h3>
            <p class="getting-started-text">
                Open your browser and navigate to the local development URL to access the main control center.
            </p>
            <div class="getting-started-action">
                <a href="{{ url('/') }}" class="btn btn-primary getting-started-btn">Open Home →</a>
            </div>
        </div>
    </div>


    <!-- Additional Help Panel -->
    <div class="card reveal getting-started-panel">
        <h3>Core Modules Overview</h3>
        <p class="getting-started-panel-text">
            Sphare Simulator is structured into 9 modular suites covering flight operations, vehicle setup, 
            navigation, vision systems, diagnostics, safety boundaries, developer tools, and documentation. 
            Use the <a href="{{ url('/pages/overview/index') }}" class="getting-started-link">Page Directory</a> 
            to access all 69 registered views instantly.
        </p>
    </div>

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
        }, { threshold: 0.1 });

        revealItems.forEach((item) => observer.observe(item));
    });
</script>
@endpush