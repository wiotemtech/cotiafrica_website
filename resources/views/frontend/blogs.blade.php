@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-950 via-slate-900 to-teal-900 pt-40 pb-14 text-white">
    <div class="pointer-events-none absolute left-0 top-8 h-64 w-64 rounded-full bg-teal-400/20 blur-3xl"></div>
    <div class="container mx-auto px-4 text-center">
        <div class="mb-4 inline-block rounded-full border border-teal-300/40 bg-teal-300/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-teal-100">
            Insights
        </div>
        <h1 class="mb-4 text-5xl font-bold md:text-6xl">Ideas, Field Notes, and Digital Strategy</h1>
        <p class="mx-auto max-w-3xl text-xl text-slate-200">Practical stories on innovation delivery, software systems, and inclusion outcomes across East Africa.</p>
    </div>
</section>

<!-- Blogs Grid -->
<section class="bg-slate-50 py-20">
    <div class="container mx-auto px-4">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($blogs as $blog)
                <article class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg transition hover:-translate-y-1 hover:shadow-2xl">
                    <div class="relative overflow-hidden h-56">
                        <img src="{{ asset('storage/' . $blog->blog_image) }}" class="h-full w-full object-cover transition duration-500 group-hover:scale-110" alt="{{ $blog->title }}">
                        <div class="absolute top-4 left-4">
                            <span class="inline-block rounded-full bg-teal-600 px-3 py-1 text-xs font-bold text-white shadow-lg shadow-teal-900/20">
                                {{ \Carbon\Carbon::parse($blog->published_at)->format('M j, Y') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-8">
                        <a href="{{ route('blogs.show', ['id' => $blog->id, 'title' => \Str::slug($blog->title)]) }}" class="mb-3 block text-2xl font-bold text-slate-900 transition group-hover:text-teal-700">
                            {{ $blog->title }}
                        </a>
                        <p class="mb-6 leading-relaxed text-slate-600">{{ Str::limit($blog->meta_description, 100) }}</p>
                        <a href="{{ route('blogs.show', ['id' => $blog->id, 'title' => \Str::slug($blog->title)]) }}" class="inline-flex items-center font-bold text-teal-700 transition hover:text-teal-900">
                            Read More
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            {{ $blogs->links('pagination::tailwind') }}
        </div>
    </div>
</section>

@endsection
