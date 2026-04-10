<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Neet Patel — Full Stack Developer (PHP/Laravel). A showcase of modern web development work, skills and experience.">
    <title>Neet Patel | Full Stack Developer Portfolio</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- GSAP --}}
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js" defer></script>

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- Custom Cursor --}}
    <div id="cursor-dot"></div>
    <div id="cursor-circle"></div>

    {{-- Navigation --}}
    <nav id="navbar">
        <div class="nav-logo">NP<span class="accent">.</span></div>
        <ul class="nav-links">
            <li><a href="#hero" class="nav-link">Home</a></li>
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#experience" class="nav-link">Experience</a></li>
            <li><a href="#skills" class="nav-link">Skills</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
        <button id="hamburger" aria-label="Open menu">
            <span></span><span></span><span></span>
        </button>
    </nav>

    {{-- Mobile Menu --}}
    <div id="mobile-menu">
        <ul>
            <li><a href="#hero" class="mobile-link">Home</a></li>
            <li><a href="#about" class="mobile-link">About</a></li>
            <li><a href="#experience" class="mobile-link">Experience</a></li>
            <li><a href="#skills" class="mobile-link">Skills</a></li>
            <li><a href="#contact" class="mobile-link">Contact</a></li>
        </ul>
    </div>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Scroll to Top --}}
    <button id="scroll-top" aria-label="Scroll to top">↑</button>
</body>
</html>
