<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Custom websites and web applications built with modern technologies and best practices.',
                'icon' => 'fa-code',
                'features' => [
                    'Responsive website design and development',
                    'Single-page applications (SPAs)',
                    'E-commerce solutions',
                    'Content management systems (CMS)',
                    'Progressive Web Apps (PWAs)',
                ],
            ],
            [
                'title' => 'DevOps Solutions',
                'description' => 'Streamline your development workflow with CI/CD pipelines, containerization, and cloud infrastructure.',
                'icon' => 'fa-server',
                'features' => [
                    'CI/CD pipeline setup and optimization',
                    'Docker containerization',
                    'Kubernetes orchestration',
                    'Cloud infrastructure setup and management',
                    'Infrastructure as Code (IaC)',
                ],
            ],
            [
                'title' => 'Consulting',
                'description' => 'Expert advice on technology stack, architecture, and best practices for your projects.',
                'icon' => 'fa-lightbulb',
                'features' => [
                    'Technology stack selection',
                    'Architecture design and review',
                    'Code review and optimization',
                    'Performance optimization',
                    'Team training and mentoring',
                ],
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
