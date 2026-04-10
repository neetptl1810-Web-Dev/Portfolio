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
                'summary' => 'Full-Stack Developer (PHP/Laravel/CodeIgniter) skilled in MySQL, MongoDB, and modern frontend tools. Built scalable web apps with Git/Jira workflows, focused on clean, user-centric solutions.',
            ],
            'experience' => [
                [
                    'company' => 'Webito (WIP)',
                    'title' => 'E-Commerce Website — Full Stack Developer',
                    'date' => 'Jan 2026 — Mar 2026',
                    'highlights' => [
                        'Built Laravel application with JWT authentication, CRUD dashboards, and role-based access control (RBAC).',
                        'Implemented MVC architecture with Blade templating and MySQL for scalable, maintainable code.',
                        'Enhanced UI/UX through custom themes, improving user engagement metrics.'
                    ],
                    'links' => [
                        'Live Demo' => 'https://web-developer.42web.io/',
                        'Admin' => 'https://web-developer.42web.io/login'
                    ]
                ],
                [
                    'company' => 'National Informatics Centre (NIC)',
                    'title' => 'CCMS — Full Stack Developer',
                    'date' => 'Jun 2025 — Oct 2025',
                    'highlights' => [
                        'Developed Court Case Management System using CodeIgniter 4, PHP, MySQL, HTML, CSS, and JavaScript.',
                        'Optimized application performance by 30%, implemented new features, and resolved critical bugs.',
                        'Collaborated in agile team of 4 to deliver secure, user-friendly solutions for government clients.'
                    ]
                ],
                [
                    'company' => 'Travel With Us',
                    'title' => 'Project — Front-End Developer',
                    'date' => 'Jan 2024 — Mar 2025',
                    'highlights' => [
                        'Built responsive UI with HTML, CSS, PHP, and Bootstrap for seamless cross-device experience.',
                        'Developed admin panel for content management; collaborated in 2-person agile team using Git.',
                        'Conducted usability testing and performance optimization; delivered project within 3-month timeline.'
                    ],
                    'links' => [
                        'Live Demo' => 'http://travel-with-us.42web.io/'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'Bachelor of Computer Applications (BCA)',
                    'institution' => 'Veer Narmad South Gujarat University (VNSGU) Shrinathji BBA, BCA & B.Com College, Daman',
                    'date' => '2022 — 2025',
                    'details' => 'Graduated: January 2025 | Final Grade: 82.10% (First Class)'
                ]
            ],
            'skills' => [
                'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap', 'UI Development', 'Responsive Design'],
                'Backend' => ['PHP', 'Laravel', 'CodeIgniter 4', 'API Integration'],
                'Databases' => ['MySQL', 'MongoDB', 'SQL'],
                'Tools' => ['Git', 'GitHub', 'Jira', 'Git Bash'],
                'Soft Skills' => ['Problem-Solving', 'Critical Thinking', 'Team Collaboration', 'Time Management', 'Adaptability']
            ]
        ];

        return view('portfolio.index', compact('data'));
    }
}
