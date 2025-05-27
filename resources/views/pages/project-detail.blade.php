@extends('layouts.app')

@section('content')
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="mx-auto max-w-3xl">
            <div class="space-y-2 mb-8">
                <a href="{{ route('projects') }}" class="inline-flex items-center text-sm text-emerald-600 hover:underline">
                    <i class="fa-solid fa-arrow-left mr-2 h-4 w-4"></i>
                    Back to Projects
                </a>
                <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">{{ $project->title }}</h1>
                <div class="flex flex-wrap gap-2 mt-4">
                    @foreach($project->tags as $tag)
                    <span class="inline-flex items-center rounded-md bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>
            
            <div class="aspect-video overflow-hidden rounded-xl mb-8">
                <img 
                    src="{{ asset($project->image) }}" 
                    alt="{{ $project->title }}" 
                    class="w-full h-full object-cover"
                >
            </div>
            
            <div class="space-y-6">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Project Overview</h2>
                    <p class="text-gray-500">{{ $project->description }}</p>
                </div>
                
                <div class="flex flex-wrap gap-4">
                    <a 
                        href="{{ $project->github_url }}" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="inline-flex h-10 items-center justify-center rounded-md border border-input bg-background px-8 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                    >
                        <i class="fa-brands fa-github mr-2 h-4 w-4"></i>
                        View on GitHub
                    </a>
                    <a 
                        href="{{ $project->demo_url }}" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="inline-flex h-10 items-center justify-center rounded-md bg-emerald-600 px-8 text-sm font-medium text-white shadow transition-colors hover:bg-emerald-700"
                    >
                        <i class="fa-solid fa-arrow-up-right-from-square mr-2 h-4 w-4"></i>
                        Live Demo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Projects -->
<section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
            <div class="space-y-2">
                <h2 class="text-3xl font-bold tracking-tighter md:text-4xl">Related Projects</h2>
                <p class="max-w-[700px] text-gray-500 md:text-xl">
                    Check out some of my other projects that you might find interesting.
                </p>
            </div>
        </div>
        <div class="mx-auto grid max-w-5xl gap-6 py-12 md:grid-cols-3">
            @foreach($relatedProjects as $relatedProject)
            <div class="group relative overflow-hidden rounded-lg border shadow-sm">
                <div class="aspect-video overflow-hidden">
                    <img 
                        src="{{ asset($relatedProject->image) }}" 
                        alt="{{ $relatedProject->title }}" 
                        class="object-cover transition-transform duration-300 group-hover:scale-105 w-full h-full"
                    >
                </div>
                <div class="p-4">
                    <h3 class="font-bold">{{ $relatedProject->title }}</h3>
                    <p class="text-sm text-gray-500">{{ implode(', ', $relatedProject->tags) }}</p>
                    <div class="mt-4 flex justify-between">
                        <a href="{{ route('projects.show', $relatedProject->id) }}" class="text-sm text-emerald-600 hover:underline">
                            View Details
                        </a>
                        <a href="{{ $relatedProject->github_url }}" class="text-sm text-gray-500 hover:text-gray-900">
                            <i class="fa-brands fa-github h-4 w-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-12">
            <div class="flex flex-col justify-center space-y-4">
                <div class="space-y-2">
                    <div class="inline-block rounded-lg bg-emerald-100 px-3 py-1 text-sm text-emerald-700">
                        Let's Connect
                    </div>
                    <h2 class="text-3xl font-bold tracking-tighter md:text-4xl">Have a Similar Project in Mind?</h2>
                    <p class="max-w-[600px] text-gray-500 md:text-xl">
                        I'm currently available for freelance projects. Let's discuss how I can help bring your ideas to life.
                    </p>
                </div>
                <div class="flex flex-col gap-2 min-[400px]:flex-row">
                    <a href="{{ route('contact') }}" class="inline-flex h-10 items-center justify-center rounded-md bg-emerald-600 px-8 text-sm font-medium text-white shadow transition-colors hover:bg-emerald-700">
                        Get in Touch
                        <i class="fa-solid fa-arrow-right ml-2 h-4 w-4"></i>
                    </a>
                </div>
            </div>
            <div class="mx-auto aspect-video overflow-hidden rounded-xl object-cover object-center sm:w-full lg:order-last">
                <img src="{{ asset('images/contact.jpg') }}" alt="Contact Image" class="rounded-xl object-cover w-full h-full">
            </div>
        </div>
    </div>
</section>
@endsection
