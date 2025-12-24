<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Skill::create(['name' => 'PHP', 'category' => 'Backend', 'is_active' => true, 'icon_class' => 'fab fa-php', 'level' => 'Advanced']);
        \App\Models\Skill::create(['name' => 'Laravel', 'category' => 'Backend', 'is_active' => true, 'icon_class' => 'fab fa-laravel', 'level' => 'Advanced']);
        \App\Models\Skill::create(['name' => 'JavaScript', 'category' => 'Frontend', 'is_active' => true, 'icon_class' => 'fab fa-js-square', 'level' => 'Intermediate']);
        \App\Models\Skill::create(['name' => 'Vue.js', 'category' => 'Frontend', 'is_active' => true, 'icon_class' => 'fab fa-vuejs', 'level' => 'Intermediate']);
        \App\Models\Skill::create(['name' => 'HTML/CSS', 'category' => 'Frontend', 'is_active' => true, 'icon_class' => 'fab fa-html5', 'level' => 'Advanced']);
        \App\Models\Skill::create(['name' => 'MySQL', 'category' => 'Database', 'is_active' => true, 'icon_class' => 'fas fa-database', 'level' => 'Intermediate']);
        \App\Models\Skill::create(['name' => 'Git', 'category' => 'Tools', 'is_active' => true, 'icon_class' => 'fab fa-git-alt', 'level' => 'Intermediate']);
    }
}
