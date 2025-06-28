@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="mb-4">
                    <a href="{{ route('projects') }}" class="d-inline-flex align-items-center text-success text-decoration-none small">
                        <i class="fa-solid fa-arrow-left me-2"></i>
                        Back to Projects
                    </a>
                    <h1 class="display-4 fw-bold mt-2">{{ $project->title }}</h1>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        @foreach($project->tags as $tag)
                        <span class="badge bg-light text-dark">
                            {{ $tag }}
                        </span>
                        @endforeach
                    </div>
                </div>
                
                <div class="ratio ratio-16x9 mb-4">
                    <img 
                        src="{{ asset($project->image) }}" 
                        alt="{{ $project->title }}" 
                        class="rounded object-fit-cover"
                    >
                </div>
                
                <div class="mb-4">
                    <div class="mb-4">
                        <h2 class="h3 fw-bold mb-3">Project Overview</h2>
                        <p class="text-muted">{{ $project->description }}</p>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <a 
                            href="{{ $project->github_url }}" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="btn btn-outline-secondary"
                        >
                            <i class="fa-brands fa-github me-2"></i>
                            View on GitHub
                        </a>
                        <a 
                            href="{{ $project->demo_url }}" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="btn btn-success"
                        >
                            <i class="fa-solid fa-arrow-up-right-from-square me-2"></i>
                            Live Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Related Projects</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">
                Check out some of my other projects that you might find interesting.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($relatedProjects as $relatedProject)
            <div class="col-lg-4 col-md-6">
                <div class="card border shadow-sm h-100 overflow-hidden">
                    <div class="ratio ratio-16x9 overflow-hidden">
                        <img 
                            src="{{ asset($relatedProject->image) }}" 
                            alt="{{ $relatedProject->title }}" 
                            class="card-img-top object-fit-cover transition-transform" 
                            style="transition: transform 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'"
                        >
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bold">{{ $relatedProject->title }}</h3>
                        <p class="card-text small text-muted">{{ implode(', ', $relatedProject->tags) }}</p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <a href="{{ route('projects.show', $relatedProject->id) }}" class="small text-success text-decoration-none">
                                View Details
                            </a>
                            <a href="{{ $relatedProject->github_url }}" class="small text-muted">
                                <i class="fa-brands fa-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="mb-3">
                    <span class="badge bg-success-subtle text-success rounded-pill px-3 py-2">
                        Let's Connect
                    </span>
                </div>
                <h2 class="display-6 fw-bold mb-3">Have a Similar Project in Mind?</h2>
                <p class="lead text-muted mb-4">
                    I'm currently available for freelance projects. Let's discuss how I can help bring your ideas to life.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-2">
                    <a href="{{ route('contact') }}" class="btn btn-success d-inline-flex align-items-center">
                        Get in Touch
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <img src="{{ asset('images/contact.jpg') }}" alt="Contact Image" class="rounded object-fit-cover w-100 h-100">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
