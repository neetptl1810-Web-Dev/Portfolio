/* resources/js/app.js – GSAP Animations for Neet Patel Portfolio */

document.addEventListener('DOMContentLoaded', () => {

    /* ═══════════════════════════════════════
       1. GSAP PLUGIN REGISTRATION
    ═══════════════════════════════════════ */
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger, TextPlugin);
        initAll();
    } else {
        // Retry after CDN load
        window.addEventListener('load', () => {
            if (typeof gsap !== 'undefined') {
                gsap.registerPlugin(ScrollTrigger, TextPlugin);
                initAll();
            }
        });
    }

    /* ═══════════════════════════════════════
       2. CUSTOM CURSOR
    ═══════════════════════════════════════ */
    const dot    = document.getElementById('cursor-dot');
    const circle = document.getElementById('cursor-circle');

    if (dot && circle) {
        let mouseX = 0, mouseY = 0;
        let circleX = 0, circleY = 0;

        document.addEventListener('mousemove', e => {
            mouseX = e.clientX;
            mouseY = e.clientY;
            dot.style.left = mouseX + 'px';
            dot.style.top  = mouseY + 'px';
        });

        (function animateCursor() {
            circleX += (mouseX - circleX) * 0.12;
            circleY += (mouseY - circleY) * 0.12;
            circle.style.left = circleX + 'px';
            circle.style.top  = circleY + 'px';
            requestAnimationFrame(animateCursor);
        })();
    }

    /* ═══════════════════════════════════════
       3. NAVBAR SCROLL EFFECT
    ═══════════════════════════════════════ */
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        }, { passive: true });
    }

    /* ═══════════════════════════════════════
       4. HAMBURGER / MOBILE MENU
    ═══════════════════════════════════════ */
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            const open = mobileMenu.classList.contains('open');
            document.body.style.overflow = open ? 'hidden' : '';
            hamburger.setAttribute('aria-expanded', open);
        });

        mobileMenu.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
                document.body.style.overflow = '';
            });
        });
    }

    /* ═══════════════════════════════════════
       5. SCROLL-TO-TOP BUTTON
    ═══════════════════════════════════════ */
    const scrollTopBtn = document.getElementById('scroll-top');
    if (scrollTopBtn) {
        window.addEventListener('scroll', () => {
            scrollTopBtn.classList.toggle('visible', window.scrollY > 500);
        }, { passive: true });

        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ═══════════════════════════════════════
       6. PARTICLE GENERATION (HERO)
    ═══════════════════════════════════════ */
    const particleContainer = document.getElementById('particles');
    if (particleContainer) {
        const count = window.innerWidth < 768 ? 20 : 50;
        for (let i = 0; i < count; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            p.style.cssText = `
                left: ${Math.random() * 100}%;
                top: ${60 + Math.random() * 40}%;
                --dur: ${5 + Math.random() * 8}s;
                --delay: ${-Math.random() * 8}s;
            `;
            if (Math.random() > 0.5) {
                p.style.background = '#9b59ff';
            }
            particleContainer.appendChild(p);
        }
    }

    /* ═══════════════════════════════════════
       7. SMOOTH ACTIVE NAV LINKS (IntersectionObserver)
    ═══════════════════════════════════════ */
    const sections  = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-link');

    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navLinks.forEach(link => {
                    link.classList.toggle(
                        'active',
                        link.getAttribute('href') === '#' + entry.target.id
                    );
                });
            }
        });
    }, { threshold: 0.4 });

    sections.forEach(sec => sectionObserver.observe(sec));

    /* ═══════════════════════════════════════
       8. MAIN INIT (GSAP)
    ═══════════════════════════════════════ */
    function initAll() {
        heroAnimations();
        scrollRevealAnimations();
        skillBarAnimations();
        timelineAnimations();
        dynamicTextLoop();
    }

    /* ═══════════════════════════════════════
       9. HERO INTRO ANIMATIONS
    ═══════════════════════════════════════ */
    function heroAnimations() {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        // Badge
        tl.to('#hero-badge', { opacity: 1, y: 0, duration: 0.6, delay: 0.2 })

        // Name
        .to('#hero-name', {
            opacity: 1,
            y: 0,
            duration: 0.9,
            ease: 'power4.out'
        }, '-=0.2')

        // Title wrap
        .to('.hero-title-wrap', { opacity: 1, y: 0, duration: 0.7 }, '-=0.5')

        // Subtitle
        .to('#hero-subtitle', { opacity: 1, y: 0, duration: 0.6 }, '-=0.4')

        // CTA Buttons
        .to('#hero-cta', { opacity: 1, y: 0, duration: 0.6 }, '-=0.3')

        // Stats
        .to('#hero-stats', { opacity: 1, y: 0, duration: 0.5 }, '-=0.2');
    }

    /* ═══════════════════════════════════════
       10. DYNAMIC HERO TEXT LOOP
    ═══════════════════════════════════════ */
    function dynamicTextLoop() {
        const el = document.getElementById('hero-dynamic');
        if (!el) return;

        const phrases = [
            'modern web apps',
            'scalable Laravel APIs',
            'clean MVC architectures',
            'intuitive UIs',
            'full-stack solutions'
        ];

        let index = 0;

        function nextPhrase() {
            gsap.to(el, {
                opacity: 0,
                y: -12,
                duration: 0.35,
                onComplete: () => {
                    index = (index + 1) % phrases.length;
                    el.textContent = phrases[index];
                    gsap.fromTo(el,
                        { opacity: 0, y: 12 },
                        { opacity: 1, y: 0, duration: 0.4 }
                    );
                }
            });
        }

        setInterval(nextPhrase, 2800);
    }

    /* ═══════════════════════════════════════
       11. SCROLL REVEAL ANIMATIONS
    ═══════════════════════════════════════ */
    function scrollRevealAnimations() {
        // Reveal Up
        gsap.utils.toArray('.reveal-up').forEach(el => {
            gsap.fromTo(el,
                { opacity: 0, y: 50 },
                {
                    opacity: 1, y: 0, duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 88%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        // Reveal Left
        gsap.utils.toArray('.reveal-left').forEach(el => {
            gsap.fromTo(el,
                { opacity: 0, x: -60 },
                {
                    opacity: 1, x: 0, duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        // Reveal Right
        gsap.utils.toArray('.reveal-right').forEach(el => {
            gsap.fromTo(el,
                { opacity: 0, x: 60 },
                {
                    opacity: 1, x: 0, duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });
    }

    /* ═══════════════════════════════════════
       12. TIMELINE STAGGER ANIMATIONS
    ═══════════════════════════════════════ */
    function timelineAnimations() {
        const items = document.querySelectorAll('.timeline-item');
        items.forEach((item, i) => {
            gsap.fromTo(item,
                { opacity: 0, x: i % 2 === 0 ? -40 : 40 },
                {
                    opacity: 1, x: 0, duration: 0.8,
                    ease: 'power3.out',
                    delay: 0.1 * i,
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 88%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });
    }

    /* ═══════════════════════════════════════
       13. SKILL BAR ANIMATIONS
    ═══════════════════════════════════════ */
    function skillBarAnimations() {
        gsap.utils.toArray('.skill-bar').forEach(bar => {
            ScrollTrigger.create({
                trigger: bar,
                start: 'top 90%',
                onEnter: () => bar.classList.add('animated'),
                once: true
            });
        });
    }

}); // end DOMContentLoaded
