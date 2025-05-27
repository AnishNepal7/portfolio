@extends('layouts.app')

@section('content')
<!-- About Hero Section -->
<section class="about-hero py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="badge bg-primary text-white mb-3 px-3 py-2">About Me</div>
                <h1 class="display-4 fw-bold mb-3">Web Developer & DevOps Engineer</h1>
                <p class="lead text-muted mb-4">I'm a passionate developer with expertise in building modern web applications and setting up robust infrastructure.</p>
                <p class="text-muted mb-4">With over 5 years of experience in the industry, I've worked with a variety of clients from startups to established businesses. My goal is to deliver high-quality solutions that not only meet but exceed client expectations.</p>
                <p class="text-muted mb-4">I believe in continuous learning and staying up-to-date with the latest technologies and best practices. This allows me to provide innovative solutions that are both efficient and scalable.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Get in Touch <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="{{ route('projects') }}" class="btn btn-outline-primary">View My Work</a>
                </div>
            </div>
            <div class="col-lg-6">
    <div class="about-image position-relative" style="width: 400px; height: 400px;">
        <img src="{{ asset('images/profile.jpg') }}" 
             alt="Profile Image" 
             class="img-fluid rounded-circle shadow w-100 h-100 object-fit-cover">
        <div class="about-shape bg-primary position-absolute"></div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="badge bg-primary-subtle text-primary mb-2">My Skills</div>
            <h2 class="display-5 fw-bold">Technical Expertise</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Here are some of the technologies and tools I work with.</p>
        </div>
        
        <div class="row g-4">
            @foreach($skills->keys() as $category)
            <div class="col-md-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm skill-card">
                    <div class="card-body p-4">
                        <div class="skill-icon d-flex justify-content-center align-items-center bg-primary-subtle text-primary rounded-circle mb-4"
     style="width: 60px; height: 60px;">
                            <i class="fas 
                                @if($category == 'Frontend Development')
                                    fa-code
                                @elseif($category == 'Backend Development')
                                    fa-server
                                @elseif($category == 'Databases')
                                    fa-database
                                @else
                                    fa-cogs
                                @endif
                                fa-2x"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ $category }}</h3>
                        <ul class="list-unstyled mb-0">
                            @foreach($skills[$category] as $skill)
                            <li class="mb-2 d-flex align-items-center">
                                <i class="fas fa-check-circle text-primary me-2"></i>
                                <span>{{ $skill->name }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Section -->
<section class="experience py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="badge bg-primary-subtle text-primary mb-2">Experience</div>
            <h2 class="display-5 fw-bold">Professional Journey</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">A brief overview of my professional experience and education.</p>
        </div>
        
        <div class="timeline position-relative mx-auto" style="max-width: 800px;">
            @foreach($experiences as $experience)
            <div class="timeline-item">
                <div class="timeline-dot bg-primary"></div>
                <div class="timeline-content card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h3 class="h5 mb-0">{{ $experience->title }}</h3>
                            <span class="badge bg-primary-subtle text-primary">
                                {{ $experience->start_date->format('Y') }} - 
                                @if($experience->is_current)
                                    Present
                                @else
                                    {{ $experience->end_date->format('Y') }}
                                @endif
                            </span>
                        </div>
                        <p class="text-muted small mb-3">{{ $experience->company }}</p>
                        <p class="text-muted mb-0">{{ $experience->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-3">Ready to Start Your Project?</h2>
                <p class="lead mb-0">I'm currently available for freelance projects. Let's discuss how I can help bring your ideas to life.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get in Touch <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
