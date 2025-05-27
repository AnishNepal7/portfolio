@extends('layouts.app')

@section('content')
<!-- Services Hero Section -->
<section class="services-hero py-5 bg-light">
    <div class="container">
        <div class="text-center">
            <div class="badge bg-primary text-white mb-3 px-3 py-2">Services</div>
            <h1 class="display-4 fw-bold mb-3">What I Can Do For You</h1>
            <p class="lead text-muted mx-auto mb-0" style="max-width: 700px;">I offer a range of services to help businesses build and maintain their digital presence.</p>
        </div>
    </div>
</section>

<!-- Services Detail Section -->
@foreach($services as $index => $service)
<section id="{{ Str::slug($service->title) }}" class="service-detail py-5 {{ $index % 2 != 0 ? 'bg-light' : '' }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 {{ $index % 2 != 0 ? 'order-lg-2' : '' }} mb-4 mb-lg-0">
                <div class="service-image position-relative">
                    <img src="{{ asset('images/services/' . Str::slug($service->title) . '.jpg') }}" alt="{{ $service->title }}" class="img-fluid rounded-3 shadow">
                    <div class="service-shape bg-primary position-absolute"></div>
                </div>
            </div>
            <div class="col-lg-6 {{ $index % 2 != 0 ? 'order-lg-1' : '' }}">
                <div class="badge bg-primary-subtle text-primary mb-3">Service {{ $index + 1 }}</div>
                <h2 class="display-6 fw-bold mb-3">{{ $service->title }}</h2>
                <p class="lead text-muted mb-4">{{ $service->description }}</p>
                <ul class="list-unstyled mb-4">
                    @foreach($service->features as $feature)
                    <li class="mb-2 d-flex align-items-center">
                        <i class="fas fa-check-circle text-primary me-2"></i>
                        <span>{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary">Get Started <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>
@endforeach

<!-- Process Section -->
<section class="process py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">My Process</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">I follow a structured approach to ensure the success of every project.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm process-card text-center">
                    <div class="card-body p-4">
                        <div class="process-number bg-primary text-white rounded-circle mb-4">1</div>
                        <h3 class="h4 mb-3">Discovery</h3>
                        <p class="text-muted mb-0">Understanding your requirements, goals, and challenges.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm process-card text-center">
                    <div class="card-body p-4">
                        <div class="process-number bg-primary text-white rounded-circle mb-4">2</div>
                        <h3 class="h4 mb-3">Planning</h3>
                        <p class="text-muted mb-0">Creating a detailed roadmap and selecting the right technologies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm process-card text-center">
                    <div class="card-body p-4">
                        <div class="process-number bg-primary text-white rounded-circle mb-4">3</div>
                        <h3 class="h4 mb-3">Execution</h3>
                        <p class="text-muted mb-0">Developing the solution with regular updates and feedback.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 border-0 shadow-sm process-card text-center">
                    <div class="card-body p-4">
                        <div class="process-number bg-primary text-white rounded-circle mb-4">4</div>
                        <h3 class="h4 mb-3">Delivery</h3>
                        <p class="text-muted mb-0">Launching the solution and providing ongoing support.</p>
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
