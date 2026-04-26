{{-- Experience Section --}}
<section id="experience">
    <div class="section-container">
        <div class="section-tag reveal-up">Work Experience</div>
        <h2 class="section-heading reveal-up">Professional <span class="accent-text">Journey</span></h2>
        <p class="section-subheading reveal-up">Real-world projects that sharpened my skills across the full stack.</p>

        <div class="timeline">
            @foreach($experience as $index => $job)
            <div class="timeline-item reveal-up" data-index="{{ $index }}">
                <div class="timeline-connector">
                    <div class="timeline-dot"></div>
                    @if(!$loop->last)<div class="timeline-line"></div>@endif
                </div>

                <div class="timeline-card glass-card">
                    <div class="timeline-header">
                        <div class="timeline-title-wrap">
                            @if(isset($job['logo']))
                            <div class="timeline-logo-wrap">
                                <img src="{{ $job['logo'] }}" alt="{{ $job['company'] }} Logo" class="timeline-logo" width="48" height="48" onerror="this.style.display='none'">
                            </div>
                            @endif
                            <div>
                                <span class="timeline-company">{{ $job['company'] }}</span>
                                <h3 class="timeline-role">{{ $job['title'] }}</h3>
                            </div>
                        </div>
                        <span class="timeline-date">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            {{ $job['date'] }}
                        </span>
                    </div>

                    <ul class="timeline-highlights">
                        @foreach($job['highlights'] as $highlight)
                        <li>
                            <span class="highlight-bullet"></span>
                            {{ $highlight }}
                        </li>
                        @endforeach
                    </ul>

                    @if(isset($job['links']))
                    <div class="timeline-links">
                        @foreach($job['links'] as $label => $url)
                        <a href="{{ $url }}" target="_blank" rel="noopener" class="timeline-link">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                            {{ $label }}
                        </a>
                        @endforeach
                    </div>
                    @endif

                    @if(isset($job['note']))
                    <p class="timeline-note">🔒 {{ $job['note'] }}</p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
