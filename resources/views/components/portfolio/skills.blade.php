{{-- Skills Section --}}
<section id="skills">
    <div class="section-container">
        <div class="section-tag reveal-up">Expertise</div>
        <h2 class="section-heading reveal-up">Technical <span class="accent-text">Skills</span></h2>
        <p class="section-subheading reveal-up">A curated toolkit built through real-world projects and continuous learning.</p>

        <div class="skills-grid">
            @php
            $icons = [
                'Frontend' => '🎨',
                'Backend'  => '⚙️',
                'Databases' => '🗄️',
                'Tools' => '🔧',
                'Soft Skills' => '🧠',
            ];
            $proficiency = [
                'HTML5' => 95, 'CSS3' => 92, 'JavaScript' => 80, 'Bootstrap' => 90, 'UI Development' => 85, 'Responsive Design' => 90,
                'PHP' => 92, 'Laravel' => 90, 'CodeIgniter 4' => 88, 'API Integration' => 82,
                'MySQL' => 90, 'MongoDB' => 72, 'SQL' => 88,
                'Git' => 85, 'GitHub' => 85, 'Jira' => 75, 'Git Bash' => 78,
            ];
            @endphp

            @foreach($skills as $category => $items)
            <div class="skill-category glass-card reveal-up" data-category="{{ $category }}">
                <div class="skill-cat-header">
                    <span class="skill-cat-icon">{{ $icons[$category] ?? '✦' }}</span>
                    <h3 class="skill-cat-title">{{ $category }}</h3>
                </div>
                <div class="skill-tags">
                    @foreach($items as $skill)
                    <div class="skill-tag" data-skill="{{ $skill }}">
                        <span class="skill-name">{{ $skill }}</span>
                        @if(isset($proficiency[$skill]))
                        <div class="skill-bar-wrap">
                            <div class="skill-bar" style="--target: {{ $proficiency[$skill] }}%"></div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
