@extends('layouts.app')

@section('content')
<section class="w-100 py-5 py-md-6 py-lg-7">
    <div class="container px-3 px-md-4 mx-auto">
        <div class="d-flex flex-column align-items-center justify-content-center text-center mb-4">
            <div class="mb-3">
                <span class="badge rounded-pill border border-success text-success px-3 py-1">
                    Portfolio
                </span>
                <h1 class="display-5 fw-bold mt-3">My Projects</h1>
                <p class="mx-auto text-muted" style="max-width:700px; font-size:1.25rem;">
                    A showcase of my work across web development and DevOps projects.
                </p>
            </div>
        </div>
        <div class="row gx-4 gy-4 justify-content-center">
            @foreach($projects as $project)
            <div class="col-12 col-md-6 col-lg-6 d-flex">
                <div class="card shadow-sm border rounded overflow-hidden flex-fill d-flex flex-column">
                    <div class="ratio ratio-16x9 overflow-hidden">
                        <img 
                            src="{{ asset($project->image) }}" 
                            alt="{{ $project->title }}" 
                            class="card-img-top object-fit-cover transition"
                            style="transition: transform 0.3s ease;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'"
                        >
                    </div>
                    <div class="card-body d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                            <p class="card-text text-muted small">{{ $project->description }}</p>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($project->tags as $tag)
                                <span class="badge bg-secondary text-light small">
                                    {{ $tag }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between align-items-center">
                            <a href="{{ route('projects.show', $project->id) }}" class="text-success text-decoration-none small">
                                View Details
                            </a>
                            <div class="d-flex gap-2">
                                <a href="{{ $project->github_url }}" class="text-muted small" target="_blank" rel="noopener noreferrer">
                                    <i class="fab fa-github fa-lg"></i>
                                    <span class="visually-hidden">GitHub</span>
                                </a>
                                <a href="{{ $project->demo_url }}" class="text-muted small" target="_blank" rel="noopener noreferrer">
                                    <i class="fas fa-arrow-up-right-from-square fa-lg"></i>
                                    <span class="visually-hidden">Live Demo</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="w-100 py-5 py-md-6 py-lg-7 bg-light">
    <div class="container px-3 px-md-4 mx-auto">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="mb-3">
                    <span class="badge bg-success text-white px-3 py-1 rounded-pill small">
                        Let's Connect
                    </span>
                    <h2 class="display-6 fw-bold mt-3">Have a Project in Mind?</h2>
                    <p class="text-muted fs-5" style="max-width:600px;">
                        I'm currently available for freelance projects. Let's discuss how I can help bring your ideas to life.
                    </p>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-success btn-lg">
                    Get in Touch <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-lg-6 d-flex justify-content-center">
                <img src="{{ asset('images/contact.png') }}" alt="Contact Image" class="rounded-3 img-fluid" style="max-height: 300px; object-fit: cover;">
            </div>
        </div>
    </div>
</section>
@endsection
