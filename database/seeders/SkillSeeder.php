<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            // Frontend Development
            ['name' => 'HTML5 / CSS3', 'category' => 'Frontend Development'],
            ['name' => 'JavaScript (ES6+)', 'category' => 'Frontend Development'],
            ['name' => 'React.js', 'category' => 'Frontend Development'],
            ['name' => 'Vue.js', 'category' => 'Frontend Development'],
            ['name' => 'Bootstrap', 'category' => 'Frontend Development'],
            
            // Backend Development
            ['name' => 'PHP / Laravel', 'category' => 'Backend Development'],
            ['name' => 'Node.js / Express', 'category' => 'Backend Development'],
            ['name' => 'Python / Django', 'category' => 'Backend Development'],
            ['name' => 'RESTful APIs', 'category' => 'Backend Development'],
            ['name' => 'GraphQL', 'category' => 'Backend Development'],
            
            // Databases
            ['name' => 'MySQL', 'category' => 'Databases'],
            ['name' => 'PostgreSQL', 'category' => 'Databases'],
            ['name' => 'MongoDB', 'category' => 'Databases'],
            ['name' => 'Redis', 'category' => 'Databases'],
            ['name' => 'Eloquent ORM', 'category' => 'Databases'],
            
            // DevOps
            ['name' => 'Docker', 'category' => 'DevOps'],
            ['name' => 'Kubernetes', 'category' => 'DevOps'],
            ['name' => 'CI/CD Pipelines', 'category' => 'DevOps'],
            ['name' => 'AWS', 'category' => 'DevOps'],
            ['name' => 'Linux Server Administration', 'category' => 'DevOps'],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
