<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnishNepal - Web Developer & DevOps Engineer</title>
    <meta name="description" content="Professional portfolio for a Web Developer and DevOps Engineer specializing in modern web applications and infrastructure solutions.">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    @yield('styles')
</head>
<body>
    <!-- Header -->
    <header class="header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                    <i class="fas fa-code text-primary me-2"></i>
                    <span class="fw-bold">Anish Nepal</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('projects') || request()->routeIs('projects.show') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-primary ms-lg-3">Hire Me</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <a href="{{ route('home') }}" class="d-flex align-items-center text-white text-decoration-none mb-3">
                        <i class="fas fa-code text-primary me-2"></i>
                        <span class="fw-bold fs-4">DevPortfolio</span>
                    </a>
                    <p class="text-muted">Web Developer & DevOps Engineer specializing in modern web applications and infrastructure solutions.</p>
                    <div class="social-links mt-3">
                        <a href="https://github.com/anishnepal7" class="me-3 text-white" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://linkedin.com/in/anishnepal7" class="me-3 text-white" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="https://twitter.com" class="me-3 text-white" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Pages</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}" class="text-muted text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}" class="text-muted text-decoration-none">About</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}" class="text-muted text-decoration-none">Services</a></li>
                        <li class="mb-2"><a href="{{ route('projects') }}" class="text-muted text-decoration-none">Projects</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}" class="text-muted text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('services') }}#web-development" class="text-muted text-decoration-none">Web Development</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}#devops" class="text-muted text-decoration-none">DevOps Solutions</a></li>
                        <li class="mb-2"><a href="{{ route('services') }}#consulting" class="text-muted text-decoration-none">Consulting</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-uppercase mb-4">Contact</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-envelope text-primary me-2"></i>
                            <a href="mailto:anishnepal1905@gmail.com" class="text-muted text-decoration-none">anishnepal1905@gmail.com</a>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-phone text-primary me-2"></i>
                            <a href="tel:+9779862864061" class="text-muted text-decoration-none">+977 9862864061</a>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt text-primary me-2"></i>
                            <span class="text-muted">Kathmandu, Nepal</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="copyright py-3 bg-darker text-center">
        <div class="container">
            <p class="m-0 text-muted">© {{ date('Y') }}anishnepal1.com.np. All rights reserved.</p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    
    @yield('scripts')
</body>
</html>
