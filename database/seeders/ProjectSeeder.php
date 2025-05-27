<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured e-commerce platform with product management, cart functionality, and payment processing.',
                'image' => 'images/projects/ecommerce.jpg',
                'tags' => ['React', 'Node.js', 'MongoDB', 'Stripe'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'is_featured' => true,
            ],
            [
                'title' => 'DevOps Dashboard',
                'description' => 'A dashboard for monitoring CI/CD pipelines, server health, and deployment status across multiple environments.',
                'image' => 'images/projects/devops.jpg',
                'tags' => ['Vue.js', 'Express', 'Docker', 'Kubernetes'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'is_featured' => true,
            ],
            [
                'title' => 'Content Management System',
                'description' => 'A custom CMS built for a media company to manage articles, images, and user-generated content.',
                'image' => 'images/projects/cms.jpg',
                'tags' => ['Next.js', 'GraphQL', 'PostgreSQL', 'AWS'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'is_featured' => true,
            ],
            [
                'title' => 'Real-time Chat Application',
                'description' => 'A real-time messaging platform with features like group chats, file sharing, and end-to-end encryption.',
                'image' => 'images/projects/chat.jpg',
                'tags' => ['React', 'Socket.io', 'Redis', 'Node.js'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'is_featured' => false,
            ],
            [
                'title' => 'Project Management Tool',
                'description' => 'A collaborative project management tool with task tracking, team management, and reporting features.',
                'image' => 'images/projects/project-management.jpg',
                'tags' => ['Angular', 'Express', 'MongoDB', 'Chart.js'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'is_featured' => false,
            ],
            [
                'title' => 'Cloud Infrastructure Setup',
                'description' => 'Automated cloud infrastructure setup using Infrastructure as Code for a SaaS application.',
                'image' => 'images/projects/cloud.jpg',
                'tags' => ['Terraform', 'AWS', 'Docker', 'CI/CD'],
                'github_url' => 'https://github.com',
                'demo_url' => 'https://demo.com',
                'is_featured' => false,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
