<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'name' => 'John Smith',
                'company' => 'Tech Innovators',
                'content' => 'Working with this developer was a fantastic experience. They delivered high-quality work on time and were always responsive to our needs.',
                'image' => 'images/testimonials/person1.jpg',
            ],
            [
                'name' => 'Sarah Johnson',
                'company' => 'Digital Solutions',
                'content' => 'I was impressed by the attention to detail and technical expertise. Our project was completed ahead of schedule and exceeded our expectations.',
                'image' => 'images/testimonials/person2.jpg',
            ],
            [
                'name' => 'Michael Brown',
                'company' => 'Creative Agency',
                'content' => 'An exceptional developer who understands both the technical and business aspects of a project. I highly recommend their services.',
                'image' => 'images/testimonials/person3.jpg',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
