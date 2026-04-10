{{-- Hero Section --}}
<section id="hero">
    <div class="hero-bg">
        <div class="hero-grid"></div>
        <div class="hero-glow glow-1"></div>
        <div class="hero-glow glow-2"></div>
        <div class="hero-particles" id="particles"></div>
    </div>

    <div class="hero-content">
        <div class="hero-badge" id="hero-badge">
            <span class="badge-dot"></span>
            <span>Available for Opportunities</span>
        </div>

        <h1 class="hero-name" id="hero-name">
            <span class="name-line">{{ $personal['name'] }}</span>
        </h1>

        <div class="hero-title-wrap">
            <span class="hero-title-static">I build </span>
            <span class="hero-title-dynamic" id="hero-dynamic">modern web apps</span>
            <span class="cursor-blink">_</span>
        </div>

        <p class="hero-subtitle" id="hero-subtitle">
            {{ $personal['subtitle'] }}
        </p>

        <div class="hero-cta" id="hero-cta">
            <a href="#experience" class="btn-primary">
                <span>View My Work</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#contact" class="btn-outline">Get In Touch</a>
        </div>

        <div class="hero-stats" id="hero-stats">
            <div class="stat">
                <span class="stat-num">1.5+</span>
                <span class="stat-label">Years Experience</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat">
                <span class="stat-num">3+</span>
                <span class="stat-label">Projects Built</span>
            </div>
            <div class="stat-divider"></div>
            <div class="stat">
                <span class="stat-num">82%</span>
                <span class="stat-label">BCA Grade</span>
            </div>
        </div>
    </div>

    <div class="hero-scroll-hint">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
        <span>Scroll to explore</span>
    </div>
</section>
