<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Home Page - Now uses the Controller to fetch dynamic data
Route::get('/', [PortfolioController::class, 'home'])->name('home');

// About Me Page
Route::get('/about', function () {
    $data = [
        'name' => 'Zahin Muntaha Khan',
        'title' => 'BSc in CSE Student & Assistant Press Secretary',
        'education' => 'BSc in Computer Science and Engineering, Daffodil International University (CGPA: 3.25)',
        'experience' => '3+ years of experience in content writing, media, team management, and programming. Assistant Press Secretary at DIU Computer Programming Club.',
        'skills' => ['Programming and Problem Solving', 'Video Editing and Photography', 'Microsoft Office (Excel, PowerPoint, Word)', 'Canva', 'Content Writing', 'Team Management', 'Bangla', 'English'],
        'bio' => 'I am passionate about transforming complex applications into simple, efficient, and scalable solutions. My goal is to build high-quality products through best engineering practices and clean code. I take on challenging new roles harnessing interpersonal skills, collaboration, and problem-solving. Driven to deliver high-quality service and consistent results. Offers excellent communication and good judgment to effectively meet team needs. Proactive planner and problem solver. Skilled in video editing and own personal YouTube channel with 758 subscribers.',
    ];
    return view('about', $data);
})->name('about');

// Projects Page - Data is now being fetched by the PortfolioController's 'home' method
// and passed to the 'home' view (which likely contains the project section).
// If you have a separate 'projects' page, you might need a separate controller method.
// Assuming your projects are shown on the 'home' page for now as per the Controller structure,
// but keeping the route for potential future use.
// You may want to delete this route if all projects are shown on the home page.
Route::get('/projects', [PortfolioController::class, 'home'])->name('projects'); // Re-using home method for project listing

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Skills Page
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');