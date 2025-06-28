@extends('layouts.app')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h1 class="display-4 fw-bold mb-0">Contact Messages</h1>
                            <p class="lead text-muted">All messages received through the contact form</p>
                        </div>
                        <div>
                            <span class="text-muted me-3">
                                <i class="fa-solid fa-user me-1"></i>
                                Welcome, {{ Auth::user()->name }}
                            </span>
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">
                                    <i class="fa-solid fa-sign-out-alt me-1"></i>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                @if($messages->count() > 0)
                    <div class="row g-4">
                        @foreach($messages as $message)
                        <div class="col-12">
                            <div class="card border shadow-sm">
                                <div class="card-header bg-light">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <h5 class="card-title mb-1 fw-bold">{{ $message->subject }}</h5>
                                            <div class="d-flex align-items-center gap-3">
                                                <span class="text-muted small">
                                                    <i class="fa-solid fa-user me-1"></i>
                                                    {{ $message->name }}
                                                </span>
                                                <span class="text-muted small">
                                                    <i class="fa-solid fa-envelope me-1"></i>
                                                    {{ $message->email }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-md-end">
                                            <span class="badge bg-success-subtle text-success">
                                                <i class="fa-solid fa-clock me-1"></i>
                                                {{ $message->created_at->format('M d, Y') }}
                                            </span>
                                            <br>
                                            <small class="text-muted">
                                                {{ $message->created_at->format('h:i A') }}
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $message->message }}</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <small class="text-muted">
                                            Received {{ $message->created_at->diffForHumans() }}
                                        </small>
                                        <div class="btn-group" role="group">
                                            <a href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}" 
                                               class="btn btn-outline-success btn-sm">
                                                <i class="fa-solid fa-reply me-1"></i>
                                                Reply
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-5">
                        {{ $messages->links() }}
                    </div>
                @else
                    <div class="text-center py-5">
                        <div class="mb-4">
                            <i class="fa-solid fa-inbox display-1 text-muted"></i>
                        </div>
                        <h3 class="fw-bold mb-3">No Messages Yet</h3>
                        <p class="text-muted mb-4">No contact messages have been received yet.</p>
                        <a href="{{ route('contact') }}" class="btn btn-success">
                            <i class="fa-solid fa-envelope me-2"></i>
                            Go to Contact Form
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
