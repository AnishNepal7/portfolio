@extends('layouts.app')

@section('content')
<section class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6 mx-auto">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
            <div class="space-y-2">
                <span class="inline-block px-3 py-1 text-sm border border-emerald-600 text-emerald-600 rounded-full">
                    Blog
                </span>
                <h1 class="text-3xl font-bold tracking-tighter sm:text-5xl">Insights & Articles</h1>
                <p class="max-w-[700px] text-gray-500 md:text-xl">
                    Thoughts, tutorials, and insights on web development and DevOps.
                </p>
            </div>
        </div>
        <div class="mx-auto grid max-w-5xl gap-8 py-12 md:grid-cols-2 lg:grid-cols-3">
            @foreach($posts as $post)
            <div class="group relative flex flex-col overflow-hidden rounded-lg border bg-background shadow-sm transition-all hover:shadow-md">
                <div class="aspect-video overflow-hidden">
                    <img 
                        src="{{ asset($post->image) }}" 
                        alt="{{ $post->title }}" 
                        class="object-cover transition-transform duration-300 group-hover:scale-105 w-full h-full"
                    >
                </div>
                <div class="flex flex-1 flex-col justify-between p-6">
                    <div class="space-y-4">
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span class="inline-flex items-center rounded-md bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">
                                    {{ $post->category }}
                                </span>
                                <span class="text-xs text-gray-500">{{ $post->published_at->format('F d, Y') }}</span>
                            </div>
                            <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                            <p class="text-sm text-gray-500">{{ $post->excerpt }}</p>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a href="{{ route('blog.show', $post->id) }}" class="inline-flex items-center text-sm font-medium text-emerald-600 hover:underline">
                            Read More
                            <i class="fa-solid fa-arrow-right ml-1 h-4 w-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100">
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
