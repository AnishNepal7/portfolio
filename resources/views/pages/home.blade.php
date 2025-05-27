@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="badge bg-primary text-white mb-3 px-3 py-2">Available for Freelance Projects</div>
                <h1 class="display-4 fw-bold mb-3">Web Developer & DevOps Engineer</h1>
                <p class="lead text-muted mb-4">Building modern web applications and robust infrastructure solutions. Let's create something amazing together.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('projects') }}" class="btn btn-primary">View My Work <i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-primary">Contact Me</a>
                </div>
                <div class="mt-4">
                    <a href="https://github.com/anishnepal7" class="text-dark me-3" target="_blank"><i class="fab fa-github fa-lg"></i></a>
                    <a href="https://linkedin.com/in/anishnepal7/" class="text-dark me-3" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a>
                    <a href="https://twitter.com" class="text-dark" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image position-relative">
                    <img src="{{ asset('images/web_profile.jpg') }}" alt="Hero Image" class="img-fluid rounded-8 shadow">
                    <div class="hero-shape bg-primary position-absolute"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services py-5">
    <div class="container">
        <div class="text-center mb-5">
            <div class="badge bg-primary-subtle text-primary mb-2">My Services</div>
            <h2 class="display-5 fw-bold">What I Can Do For You</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">I offer a range of services to help businesses build and maintain their digital presence.</p>
        </div>
        
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <div class="card-body p-4 text-center">
                        <div class="service-icon text-primary rounded-circle mx-auto mb-4">
                            <i class="fas {{ $service->icon }} fa-2x"></i>
                        </div>
                        <h3 class="h4 mb-3">{{ $service->title }}</h3>
                        <p class="text-muted mb-4">{{ $service->description }}</p>
                        <a href="{{ route('services') }}#{{ Str::slug($service->title) }}" class="btn btn-link text-primary p-0">Learn more <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="badge bg-primary-subtle text-primary mb-2">Featured Projects</div>
            <h2 class="display-5 fw-bold">Recent Work</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Check out some of my latest projects and see what I can do for you.</p>
        </div>
        
        <div class="row g-4">
            @foreach($featuredProjects as $project)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm project-card">
                    <div class="project-image">
                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" class="card-img-top">
                    </div>
                    <div class="card-body p-4">
                        <h3 class="h5 mb-2">{{ $project->title }}</h3>
                        <p class="text-muted small mb-3">{{ implode(', ', $project->tags) }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-link text-primary p-0">View Details</a>
                            <a href="{{ $project->github_url }}" class="text-muted" target="_blank"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('projects') }}" class="btn btn-outline-primary">View All Projects</a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="my-skills-in-action py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="badge bg-primary-subtle text-primary mb-2">I Can & I Have</div>
            <h2 class="display-5 fw-bold">Proven Skills in Action</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Not just theory — I’ve applied these skills to build, deploy, and manage real-world projects.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="h5 fw-bold mb-3">
                            <i class="fas fa-code-branch text-primary me-2"></i>CI/CD Integration
                        </h4>
                        <p class="text-muted mb-0">
                            Automated testing and deployment pipelines using GitHub Actions, GitLab CI, and Jenkins for faster, error-free releases.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="h5 fw-bold mb-3">
                            <i class="fas fa-server text-primary me-2"></i>Web App Deployment
                        </h4>
                        <p class="text-muted mb-0">
                            Deployed Laravel, WordPress, and Node.js applications on cloud/VPS with custom domain, HTTPS, and performance tuning.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="h5 fw-bold mb-3">
                            <i class="fas fa-terminal text-primary me-2"></i>Linux Server Management
                        </h4>
                        <p class="text-muted mb-0">
                            Configured and secured Linux based servers, managed firewalls, automated backups, and used Docker to isolate environments.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="h5 fw-bold mb-3">
                            <i class="fas fa-laptop-code text-primary me-2"></i>Custom Application Development
                        </h4>
                        <p class="text-muted mb-0">
                            Built tailored solutions like e-commerce, organizational portals, and feedback systems from scratch using Laravel, PHP, and MySQL.
                        </p>
                    </div>
                </div>
            </div>
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
