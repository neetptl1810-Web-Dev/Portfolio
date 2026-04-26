{{-- Contact & Education Section --}}
<section id="contact">
    <div class="section-container">
        <div class="section-tag reveal-up">Get In Touch</div>
        <h2 class="section-heading reveal-up">Let's <span class="accent-text">Connect</span></h2>
        <p class="section-subheading reveal-up">I'm open to new full-stack roles, collaborations,<br>and exciting projects across the UK and beyond.</p>

        <div class="contact-grid">
            {{-- Contact Card --}}
            <div class="contact-card glass-card reveal-left">
                <h3>Contact Details</h3>
                <div class="contact-items">
                    <a href="mailto:{{ $personal['email'] }}" class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <span class="contact-label">Email</span>
                            <span class="contact-value">{{ $personal['email'] }}</span>
                        </div>
                    </a>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81a19.79 19.79 0 01-3.07-8.68A2 2 0 012 1h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 8.91a16 16 0 006.18 6.18l1.28-1.278a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                        </div>
                        <div>
                            <span class="contact-label">Phone</span>
                            <span class="contact-value">{{ $personal['phone'] }}</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div>
                            <span class="contact-label">Location</span>
                            <span class="contact-value">{{ $personal['address'] }}</span>
                        </div>
                    </div>
                    <a href="{{ $personal['linkedin'] }}" target="_blank" rel="noopener" class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </div>
                        <div>
                            <span class="contact-label">LinkedIn</span>
                            <span class="contact-value">neet-patel-p55</span>
                        </div>
                    </a>
                    <a href="{{ $personal['github'] }}" target="_blank" rel="noopener" class="contact-item">
                        <div class="contact-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                        </div>
                        <div>
                            <span class="contact-label">GitHub</span>
                            <span class="contact-value">neetptl/1810-Web-Dev</span>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Education & Certificates Card --}}
            <div class="edu-card glass-card reveal-right">
                <h3>Education</h3>
                @foreach($education as $edu)
                <div class="edu-item">
                    @if(isset($edu['logo']))
                    <div class="edu-logo-wrap">
                        <img src="{{ $edu['logo'] }}" alt="{{ $edu['institution'] }} Logo" class="edu-logo" onerror="this.style.display='none'">
                    </div>
                    @else
                    <div class="edu-icon">🎓</div>
                    @endif
                    <div class="edu-details">
                        <h4>{{ $edu['degree'] }}</h4>
                        <p class="edu-institution">{{ $edu['institution'] }}</p>
                        <div class="edu-meta">
                            <span class="edu-date">{{ $edu['date'] }}</span>
                            <span class="edu-grade">{{ $edu['details'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach

                @if(isset($certificates) && count($certificates) > 0)
                <h3 style="margin-top: 2rem;">Certificates</h3>
                @foreach($certificates as $cert)
                <div class="edu-item">
                    @if(isset($cert['logo']))
                    <div class="edu-logo-wrap">
                        <img src="{{ $cert['logo'] }}" alt="{{ $cert['issuer'] }} Logo" class="edu-logo" onerror="this.style.display='none'">
                    </div>
                    @else
                    <div class="edu-icon">📜</div>
                    @endif
                    <div class="edu-details">
                        <h4>{{ $cert['title'] }}</h4>
                        <p class="edu-institution">{{ $cert['issuer'] }}</p>
                        <div class="edu-meta">
                            <span class="edu-date">{{ $cert['date'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

                <div class="availability-badge">
                    <div class="avail-pulse"></div>
                    <div>
                        <strong>Right to Work — UK</strong>
                        <p>Settled Status · Immediately Available</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <footer class="portfolio-footer reveal-up">
            <p>Designed & Built with AI by <span class="accent-text">Neet Patel</span></p>
        </footer>
    </div>
</section>
