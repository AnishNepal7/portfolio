@extends('layouts.app')

@section('content')
<section class="py-5 py-md-6 py-lg-7">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge rounded-pill border border-success text-success px-3 py-1">Contact</span>
            <h1 class="display-5 fw-bold mt-3">Get in Touch</h1>
            <p class="mx-auto text-secondary fs-5" style="max-width:700px;">
                Have a project in mind or want to discuss a potential collaboration? I'd love to hear from you.
            </p>
        </div>

        <div class="row g-4 g-lg-5">
            <div class="col-lg-6">
                <div class="mb-4">
                    <h2 class="fw-bold">Contact Information</h2>
                    <p class="text-secondary">Feel free to reach out through any of the following channels.</p>
                </div>

                <div class="mb-4">
                    <div class="d-flex align-items-start mb-3">
                        <i class="fa-solid fa-envelope text-success me-3 fs-5 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Email</h5>
                            <p class="text-secondary mb-0">anishnepal1905@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fa-solid fa-phone text-success me-3 fs-5 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Phone</h5>
                            <p class="text-secondary mb-0">+977 9862864061</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-location-dot text-success me-3 fs-5 mt-1"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Location</h5>
                            <p class="text-secondary mb-0">Kathmandu,Nepal</p>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <h5 class="fw-bold">Connect on Social Media</h5>
                    <div class="d-flex gap-3">
                        <a href="https://github.com" class="btn btn-light rounded-circle p-2 text-secondary" aria-label="GitHub" target="_blank" rel="noopener">
                            <i class="fa-brands fa-github fs-5"></i>
                            <span class="visually-hidden">GitHub</span>
                        </a>
                        <a href="https://linkedin.com" class="btn btn-light rounded-circle p-2 text-secondary" aria-label="LinkedIn" target="_blank" rel="noopener">
                            <i class="fa-brands fa-linkedin fs-5"></i>
                            <span class="visually-hidden">LinkedIn</span>
                        </a>
                        <a href="https://twitter.com" class="btn btn-light rounded-circle p-2 text-secondary" aria-label="Twitter" target="_blank" rel="noopener">
                            <i class="fa-brands fa-twitter fs-5"></i>
                            <span class="visually-hidden">Twitter</span>
                        </a>
                    </div>
                </div>

                <div class="border rounded-3 bg-light p-4">
                    <h5 class="fw-bold">Availability</h5>
                    <p class="text-secondary mb-0">
                        I'm currently available for freelance projects and consulting work. My typical response time is within 24 hours.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="border rounded-3 p-4 shadow-sm">
                    <h2 class="fw-bold mb-3">Send a Message</h2>
                    <p class="text-secondary mb-4">
                        Fill out the form below and I'll get back to you as soon as possible.
                    </p>

                    @if(session('success'))
                        <div class="alert alert-success text-center rounded-3">
                            <h3 class="fw-bold text-success">Message Sent!</h3>
                            <p class="text-success">{{ session('success') }}</p>
                            <button 
                                onclick="window.location.href='{{ route('contact') }}'" 
                                class="btn btn-success mt-3"
                            >
                                Send Another Message
                            </button>
                        </div>
                    @else
                        <form action="{{ route('contact.submit') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input 
                                        type="text" 
                                        class="form-control @error('name') is-invalid @enderror" 
                                        id="name" 
                                        name="name" 
                                        placeholder="Your name" 
                                        required
                                    >
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input 
                                        type="email" 
                                        class="form-control @error('email') is-invalid @enderror" 
                                        id="email" 
                                        name="email" 
                                        placeholder="Your email" 
                                        required
                                    >
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input 
                                    type="text" 
                                    class="form-control @error('subject') is-invalid @enderror" 
                                    id="subject" 
                                    name="subject" 
                                    placeholder="Subject of your message" 
                                    required
                                >
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label">Message</label>
                                <textarea 
                                    class="form-control @error('message') is-invalid @enderror" 
                                    id="message" 
                                    name="message" 
                                    rows="6" 
                                    placeholder="Your message" 
                                    required
                                ></textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-success w-100">
                                Send Message
                            </button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 py-md-6 py-lg-7 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-6 fw-bold">Frequently Asked Questions</h2>
            <p class="mx-auto text-secondary fs-5" style="max-width:700px;">
                Here are answers to some common questions about my services.
            </p>
        </div>

        <div class="row g-4 row-cols-1 row-cols-md-2 mx-auto" style="max-width:900px;">
            <div class="col">
                <div class="card border-0 shadow-sm p-3 h-100">
                    <h5 class="card-title fw-bold">What is your typical project timeline?</h5>
                    <p class="card-text text-secondary">
                        Project timelines vary depending on complexity and scope. A simple website might take 2-4 weeks, while more complex applications can take 2-3 months or more.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm p-3 h-100">
                    <h5 class="card-title fw-bold">What are your payment terms?</h5>
                    <p class="card-text text-secondary">
                        I typically require a 50% deposit to begin work, with the remaining balance due upon project completion. For larger projects, we can establish a milestone-based payment schedule.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm p-3 h-100">
                    <h5 class="card-title fw-bold">Do you provide ongoing maintenance?</h5>
                    <p class="card-text text-secondary">
                        Yes, I offer maintenance packages to keep your website or application up-to-date, secure, and running smoothly. We can discuss the specific needs of your project.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card border-0 shadow-sm p-3 h-100">
                    <h5 class="card-title fw-bold">Can you work with existing codebases?</h5>
                    <p class="card-text text-secondary">
                        Absolutely. I have experience working with existing projects, performing code audits, and implementing improvements or new features to established applications.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
