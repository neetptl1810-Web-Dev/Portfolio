<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'personal' => [
                'name' => 'Neet Patel',
                'title' => 'Full Stack Developer',
                'subtitle' => 'PHP / Laravel / Modern Web',
                'phone' => '07440554072',
                'address' => 'Leicestershire, UK',
                'email' => 'patelneet55@gmail.com',
                'linkedin' => 'https://linkedin.com/in/neet-patel-p55',
                'github' => 'https://github.com/neetptl1810-Web-Dev',
                'summary' => 'Full-Stack Developer (PHP, Laravel, CodeIgniter) with strong MySQL & MongoDB expertise. Builds scalable, user-focused web apps using modern frontend tools and Git/Jira workflows. Leverages AI tools (Copilot, Claude, Cursor) for faster, secure, and clean code delivery.',
            ],
            'experience' => [
                [
                    'company' => 'Caterpillar Desford',
                    'title' => 'Part Assembler Operative',
                    'date' => 'April 2026 — Present',
                    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/c/ce/Caterpillar-shortened.svg',
                    'highlights' => [
                        'Met strict takt time targets in lean manufacturing, ensuring on-time delivery and smooth production flow.',
                        'Assembled components to exact specifications with precision, minimizing defects and rework.',
                        'Applied disciplined time management to complete tasks efficiently under tight deadlines.',
                        'Collaborated with cross-functional teams to troubleshoot issues and maintain safety and quality standards.'
                    ]
                ],
                [
                    'company' => 'Weather Website',
                    'title' => 'Project — Full Stack Developer',
                    'date' => 'Apr 2026 — Present',
                    'logo' => asset('internicon.ico'),
                    'highlights' => [
                        'Built a Laravel-based weather web app using APIs to display real-time weather data.',
                        'Designed a responsive and user-friendly interface for smooth cross-device experience.',
                        'Implemented city search functionality with fast and accurate weather updates.',
                        'Enhanced UI/UX and fixed layout issues to improve performance and usability.'
                    ]
                ],
                [
                    'company' => 'Lloyds Banking Group (Forage)',
                    'title' => 'UX Design Intro Job Simulation',
                    'date' => 'April 2026',
                    'logo' => 'https://cdn.brandfetch.io/idIvWxulRU/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1746452074526',
                    'highlights' => [
                        'Completed competitor research and UX enhancement tasks for Lloyds\' digital banking experience.',
                        'Designed and analysed customer surveys (50+ respondents) to identify high-impact feature improvements.',
                        'Conduct ethnographic research to uncover user behaviour insights, informing navigation and security enhancements.',
                        'Presented findings via data visualisation tools to clearly communicate actionable UX recommendations.'
                    ]
                ],
                [
                    'company' => 'JPMorgan Chase & Co (Forage)',
                    'title' => 'Software Engineering Job Simulation',
                    'date' => 'Mar 2026 — April 2026',
                    'logo' => 'https://cdn.brandfetch.io/id86doDUIr/w/400/h/400/theme/dark/icon.png?c=1bxid64Mup7aczewSAYMX&t=1741320084241',
                    'highlights' => [
                        'Built a Spring Boot microservice processing Kafka transactions with JPA and H2 persistence.',
                        'Integrated external Incentive REST API using RestTemplate, embedding responses into transactional workflows.',
                        'Exposed user balance queries via REST controller returning JSON, maintaining clean architectural boundaries.',
                        'Ensured end-to-end reliability with Maven tests + debugger inspection across message ingestion, DB, and API layers.'
                    ]
                ],
                [
                    'company' => 'Webito Infotech',
                    'title' => 'E-Commerce Website — Full Stack Developer (Intern)',
                    'date' => 'Jan 2026 — Mar 2026',
                    'logo' => 'https://cdn.brandfetch.io/id9hqYOTli/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1772201676672',
                    'highlights' => [
                        'Built a multi-tenant e-commerce platform enabling users to launch custom stores without separate deployments.',
                        'Implemented Laravel architecture with JWT auth, RBAC, and dynamic CRUD dashboards to solve scalability challenges.',
                        'Applied MVC/Blade + MySQL for clean, maintainable, and extensible codebase.'
                    ],
                    'links' => [
                        'Live Demo' => 'https://web-developer.42web.io/',
                        'Admin' => 'https://web-developer.42web.io/login'
                    ]
                ],
                [
                    'company' => 'Personal Portfolio Website',
                    'title' => 'Project — Full-Stack Developer',
                    'date' => 'Mar 2026 — Mar 2026',
                    'logo' => asset('internicon.ico'),
                    'highlights' => [
                        'Developed a responsive portfolio site in minutes using AI tools, Laravel, demonstrating rapid prototyping skills.',
                        'Implemented clean MVC architecture with Blade templating for scalable, maintainable, and reusable code structure.',
                        'Integrated smooth scrolling navigation and responsive design for seamless, modern user experience across devices.'
                    ],
                    'links' => [
                        'Live Demo' => 'http://neet-patel-portfolio.42web.io/'
                    ]
                ],
                [
                    'company' => 'National Informatics Centre',
                    'title' => 'CCMS — Full Stack Developer (Trainee)',
                    'date' => 'Jun 2025 — Oct 2025',
                    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/1/12/NIC_logo.svg',
                    'highlights' => [
                        'Developed secure Court Case Management System using CodeIgniter 4, PHP, MySQL, and modern frontend technologies.',
                        'Improved system performance by 30% through optimization, feature enhancements, and critical bug resolution.',
                        'Collaborated within a 4-member agile team to deliver reliable, user-centric solutions for government stakeholders.'
                    ],
                    'note' => 'Confidential project — not publicly accessible due to sensitive data'
                ],
                [
                    'company' => 'Travel With Us',
                    'title' => 'Project — Front-End Developer',
                    'date' => 'Jan 2025 — Mar 2025',
                    'logo' => asset('internicon.ico'),
                    'highlights' => [
                        'Co-developed a travel booking platform enabling users to easily explore, customize, and book travel packages.',
                        'Built responsive UI using HTML, CSS, PHP, and Bootstrap for seamless cross-device usability.',
                        'Developed admin panel for efficient content management; collaborated in a 2-member agile team using Git.'
                    ],
                    'links' => [
                        'Live Demo' => 'https://travel-with-us.42web.io/'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'Master of Computer Applications (MCA)',
                    'institution' => 'Amity University Online, Noida',
                    'date' => '2025 — Present',
                    'logo' => 'https://cdn.brandfetch.io/iduHQvNmhz/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1763996872527',
                    'details' => 'Specialization in Artificial Intelligence & Machine Learning | Expected Graduation: 2027 (Current: Semester 2)'
                ],
                [
                    'degree' => 'Bachelor of Computer Applications (BCA)',
                    'institution' => 'Veer Narmad South Gujarat University (VNSGU)',
                    'date' => '2022 — 2025',
                    'logo' => 'https://static.wikia.nocookie.net/logopedia/images/0/0b/VNSGU.png/revision/latest?cb=20200405053920',
                    'details' => 'Graduated: January 2025 | Final Grade: 82.10% (First Class)'
                ]
            ],
            'certificates' => [
                [
                    'title' => 'Full-Stack CI4 Developer Trainee',
                    'issuer' => 'National Informatics Centre',
                    'date' => 'Oct 2025',
                    'logo' => 'https://upload.wikimedia.org/wikipedia/commons/1/12/NIC_logo.svg'
                ],
                [
                    'title' => 'Full-Stack PHP/Laravel Developer Intern',
                    'issuer' => 'Webito Infotech',
                    'date' => 'Mar 2026',
                    'logo' => 'https://cdn.brandfetch.io/id9hqYOTli/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1772201676672'
                ],
                [
                    'title' => 'Software Engineering Job Simulation',
                    'issuer' => 'JPMorgan Chase & Co',
                    'date' => 'Apr 2026',
                    'logo' => 'https://cdn.brandfetch.io/id86doDUIr/w/400/h/400/theme/dark/icon.png?c=1bxid64Mup7aczewSAYMX&t=1741320084241'
                ],
                [
                    'title' => 'UX Design Introduction Job Simulation',
                    'issuer' => 'Lloyds Banking Group',
                    'date' => 'Apr 2026',
                    'logo' => 'https://cdn.brandfetch.io/idIvWxulRU/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1746452074526'
                ],
                [
                    'title' => 'Certificate in Advanced Excel',
                    'issuer' => 'Amity University',
                    'date' => 'N/A',
                    'logo' => 'https://cdn.brandfetch.io/iduHQvNmhz/w/400/h/400/theme/dark/icon.jpeg?c=1bxid64Mup7aczewSAYMX&t=1763996872527'
                ]
            ],
            'skills' => [
                'Languages' => [
                    ['name' => 'PHP', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg'],
                    ['name' => 'JavaScript', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg'],
                    ['name' => 'HTML5', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg'],
                    ['name' => 'CSS3', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original.svg'],
                    ['name' => 'SQL', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg'],
                ],
                'Frameworks' => [
                    ['name' => 'Laravel', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg'],
                    ['name' => 'CodeIgniter 4', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/codeigniter/codeigniter-plain.svg'],
                    ['name' => 'Bootstrap', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg'],
                ],
                'Databases' => [
                    ['name' => 'MySQL', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg'],
                    ['name' => 'MongoDB', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mongodb/mongodb-original.svg'],
                    ['name' => 'MariaDB', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mariadb/mariadb-original.svg'],
                ],
                'Tools' => [
                    ['name' => 'Git', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg'],
                    ['name' => 'GitHub', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original.svg'],
                    ['name' => 'Composer', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/composer/composer-original.svg'],
                    ['name' => 'Jira', 'logo' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jira/jira-original.svg'],
                ]
            ]
        ];

        return view('portfolio.index', compact('data'));
    }
}
