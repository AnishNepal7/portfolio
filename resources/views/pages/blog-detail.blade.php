@extends('layouts.app')

@section('content')
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="mx-auto max-w-3xl">
            <div class="space-y-2 mb-8">
                <a href="{{ route('blog') }}" class="inline-flex items-center text-sm text-emerald-600 hover:underline">
                    <i class="fa-solid fa-arrow-left mr-2 h-4 w-4"></i>
                    Back to Blog
                </a>
                <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl">{{ $post->title }}</h1>
                <div class="flex items-center justify-between mt-4">
                    <span class="inline-flex items-center rounded-md bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">
                        {{ $post->category }}
                    </span>
                    <span class="text-sm text-gray-500">{{ $post->published_at->format('F d, Y') }}</span>
                </div>
            </div>
            
            <div class="aspect-video overflow-hidden rounded-xl mb-8">
                <img 
                    src="{{ asset($post->image) }}" 
                    alt="{{ $post->title }}" 
                    class="w-full h-full object-cover"
                >
            </div>
            
            <div class="prose prose-emerald max-w-none">
                {!! $post->content !!}
            </div>
            
            <div class="mt-12 pt-6 border-t">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <span class="text-sm font-medium">Share:</span>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <i class="fa-brands fa-twitter h-5 w-5"></i>
                            <span class="sr-only">Twitter</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <i class="fa-brands fa-facebook h-5 w-5"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900">
                            <i class="fa-brands fa-linkedin h-5 w-5"></i>
                            <span class="sr-only">LinkedIn</span>
                        </a>
                    </div>
                    <a href="{{ route('blog') }}" class="text-sm text-emerald-600 hover:underline">
                        View All Posts
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Recent Posts -->
<section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
            <div class="space-y-2">
                <h2 class="text-3xl font-bold tracking-tighter md:text-4xl">Recent Posts</h2>
                <p class="max-w-[700px] text-gray-500 md:text-xl">
                    Check out some of my other recent articles.
                </p>
            </div>
        </div>
        <div class="mx-auto grid max-w-5xl gap-6 py-12 md:grid-cols-3">
            @foreach($recentPosts as $recentPost)
            <div class="group relative overflow-hidden rounded-lg border shadow-sm">
                <div class="aspect-video overflow-hidden">
                    <img 
                        src="{{ asset($recentPost->image) }}" 
                        alt="{{ $recentPost->title }}" 
                        class="object-cover transition-transform duration-300 group-hover:scale-105 w-full h-full"
                    >
                </div>
                <div class="p-4">
                    <h3 class="font-bold">{{ $recentPost->title }}</h3>
                    <p class="text-sm text-gray-500">{{ $recentPost->published_at->format('F d, Y') }}</p>
                    <div class="mt-4">
                        <a href="{{ route('blog.show', $recentPost->id) }}" class="text-sm text-emerald-600 hover:underline">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
            <div class="space-y-2">
                <h2 class="text-3xl font-bold tracking-tighter md:text-4xl">Subscribe to My Newsletter</h2>
                <p class="max-w-[700px] text-gray-500 md:text-xl">
                    Get the latest articles, tutorials, and updates delivered straight to your inbox.
                </p>
            </div>
            <div class="mx-auto w-full max-w-md space-y-2">
                <form class="flex gap-2">
                    <input 
                        type="email" 
                        placeholder="Enter your email" 
                        class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 max-w-lg flex-1"
                    >
                    <button 
                        type="submit" 
                        class="inline-flex h-10 items-center justify-center rounded-md bg-emerald-600 px-8 text-sm font-medium text-white shadow transition-colors hover:bg-emerald-700"
                    >
                        Subscribe
                    </button>
                </form>
                <p class="text-xs text-gray-500">I respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </div>
</section>
@endsection
