<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;
use Carbon\Carbon;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $experiences = [
            [
                'title' => 'Senior Web Developer',
                'company' => 'Tech Solutions Inc.',
                'description' => 'Lead developer for multiple client projects, focusing on modern web applications and DevOps solutions. Implemented CI/CD pipelines and containerization strategies to improve deployment efficiency.',
                'start_date' => Carbon::createFromDate(2020, 1, 1),
                'end_date' => null,
                'is_current' => true,
            ],
            [
                'title' => 'Web Developer',
                'company' => 'Digital Innovations',
                'description' => 'Developed responsive websites and web applications for clients across various industries. Collaborated with design and marketing teams to ensure seamless integration of frontend and backend systems.',
                'start_date' => Carbon::createFromDate(2018, 1, 1),
                'end_date' => Carbon::createFromDate(2020, 1, 1),
                'is_current' => false,
            ],
            [
                'title' => 'Junior Developer',
                'company' => 'WebTech Solutions',
                'description' => 'Assisted in the development of websites and web applications. Gained experience in frontend and backend technologies, as well as version control and deployment processes.',
                'start_date' => Carbon::createFromDate(2016, 1, 1),
                'end_date' => Carbon::createFromDate(2018, 1, 1),
                'is_current' => false,
            ],
            [
                'title' => 'Bachelor of Science in Computer Science',
                'company' => 'University of Technology',
                'description' => 'Graduated with honors. Specialized in software development and computer systems.',
                'start_date' => Carbon::createFromDate(2012, 1, 1),
                'end_date' => Carbon::createFromDate(2016, 1, 1),
                'is_current' => false,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
