<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'name' => 'Personal Portfolio Website',
            'description' => 'A Laravel-based portfolio website showcasing skills, projects, and personal information.',
            'image' => null,
            'link' => 'https://sites.google.com/diu.edu.bd/zahinmuntahakhan/home',
            'is_active' => true
        ]);

        \App\Models\Project::create([
            'name' => 'YouTube Channel Content',
            'description' => 'Personal YouTube channel with 758 subscribers featuring video editing and educational content.',
            'image' => null,
            'link' => null,
            'is_active' => true
        ]);

        \App\Models\Project::create([
            'name' => 'DIU CPC Media Projects',
            'description' => 'Content writing and media management for DIU Computer Programming Club events and activities.',
            'image' => null,
            'link' => null,
            'is_active' => true
        ]);

        \App\Models\Project::create([
            'name' => 'Job Utsob 2024 Campaign',
            'description' => 'Volunteering project involving content writing and team management for Job Utsob 2024.',
            'image' => null,
            'link' => null,
            'is_active' => true
        ]);
    }
}
