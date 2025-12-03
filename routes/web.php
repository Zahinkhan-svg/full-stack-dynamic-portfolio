<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// About Me Page with Data
Route::get('/about', function () {
    $data = [
        'name' => 'Zahin Muntaha Khan',
        'title' => 'Software Engineer & Laravel Developer',
        'education' => 'B.Sc. in Computer Science and Engineering, Daffodil International University',
        'experience' => '3years of Experience - Modern PHP, Laravel, Node.js and AWS',
        'skills' => ['Laravel', 'PHP', 'REST API', 'Vue.js', 'Tailwind CSS', 'PostgreSQL', 'AWS/Docker', 'Git'],
        'bio' => 'I am passionate about transforming complex applications into simple, efficient, and scalable solutions. My goal is to build high-quality products through best engineering practices and clean code',
    ];
    return view('about', $data);
})->name('about');

// Projects Page with Data
Route::get('/projects', function () {
    $projects = [
        [
            'name' => 'Microservices Architecture', 
            'description' => 'Developed a scalable event-driven microservices system using Laravel and RabbitMQ', 
            'tech' => 'Laravel, RabbitMQ, Docker, PHP 8.2',
            'link' => '#',
        ],
        [
            'name' => 'SAAS Dashboard', 
            'description' => 'Designed a premium SaaS dashboard template utilizing Tailwind CSS and Blade components.', 
            'tech' => 'Laravel, Blade, Alpine.js, Tailwind CSS',
            'link' => '#',
        ],
        [
            'name' => 'Cloud Deployment Script', 
            'description' => 'Created custom shell scripts and Dockerfiles for automated application deployment on AWS', 
            'tech' => 'Bash, Docker, AWS EC2, Nginx',
            'link' => '#',
        ],
    ];
    return view('projects', ['projects' => $projects]);
})->name('projects');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');