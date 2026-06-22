@extends('layouts.app')

@section('content')
<section class="mx-auto max-w-4xl px-4 py-16">
    <article class="overflow-hidden rounded-3xl bg-white shadow-xl ring-1 ring-slate-200">
        <img src="{{ asset('storage/' . $blog->blog_image) }}" class="h-72 w-full object-cover md:h-96" alt="{{ $blog->title }}">
        <div class="p-8 md:p-10">
            <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Published on {{ \Carbon\Carbon::parse($blog->published_at)->format('F j, Y') }}</p>
            <h1 class="mt-3 text-3xl font-extrabold text-slate-900 md:text-5xl">{{ $blog->title }}</h1>
            <div class="mt-8 max-w-none text-slate-700">
                {!! $blog->content !!}
            </div>
        </div>
    </article>
</section>
@endsection
