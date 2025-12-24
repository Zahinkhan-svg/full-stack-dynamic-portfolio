<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    public function home()
    {
        // Fetch all active projects
        $projects = DB::table('projects')
                      ->where('is_active', true)
                      ->orderBy('id', 'desc')
                      ->get();

        // Fetch all active skills
        $skills = DB::table('skills')
                    ->where('is_active', true)
                    ->orderBy('category', 'asc')
                    ->get();

        // Pass the data to the 'pages.home' view
        return view('pages.home', [
            'projects' => $projects,
            'skills' => $skills,
        ]);
    }

    public function skills()
    {
        // Fetch all active skills
        $skills = DB::table('skills')
                    ->where('is_active', true)
                    ->orderBy('category', 'asc')
                    ->get();

        // Pass the data to the 'skills' view
        return view('skills', [
            'skills' => $skills,
        ]);
    }
}