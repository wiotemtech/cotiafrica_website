@extends('layouts.app')

@section('content')
<section class="bg-slate-900 py-16 text-white">
    <div class="mx-auto max-w-7xl px-4">
        <h1 class="text-4xl font-extrabold md:text-6xl">Learn Programming</h1>
        <p class="mt-4 max-w-3xl text-slate-300">Start your journey from beginner fundamentals to practical software projects that prepare you for real tech roles.</p>
    </div>
</section>

<section class="mx-auto max-w-7xl px-4 py-16">
    <div class="grid items-center gap-8 md:grid-cols-2">
        <img src="{{ asset('assets/images/web2.jpg') }}" alt="Programming course" class="h-80 w-full rounded-3xl object-cover shadow-xl">
        <article class="rounded-3xl bg-white p-8 shadow-lg ring-1 ring-slate-200">
            <h2 class="text-2xl font-extrabold">About the program</h2>
            <p class="mt-4 leading-8 text-slate-600">Unlock the world of coding with a curriculum designed for beginners and advancing learners. Build real-world projects and gain confidence in modern development workflows.</p>
        </article>
    </div>

    <div class="mt-10 grid gap-6 md:grid-cols-2">
        <article class="rounded-3xl bg-white p-8 ring-1 ring-slate-200 shadow-lg">
            <h3 class="text-xl font-bold">Course Outline</h3>
            <ul class="mt-4 list-disc space-y-2 pl-5 text-slate-600">
                <li>Responsive frontend development and deployment practices.</li>
                <li>API integration and dynamic data experiences.</li>
                <li>Team coding standards and code review collaboration.</li>
                <li>Performance optimization and portfolio readiness.</li>
            </ul>
        </article>
        <article class="rounded-3xl bg-white p-8 ring-1 ring-slate-200 shadow-lg">
            <h3 class="text-xl font-bold">Admission Criteria</h3>
            <ul class="mt-4 list-disc space-y-2 pl-5 text-slate-600">
                <li>High school diploma or equivalent background.</li>
                <li>English proficiency for instruction and participation.</li>
                <li>Affordable training model with clear monthly tuition.</li>
                <li>Course duration: 12 months of practical progression.</li>
            </ul>
        </article>
    </div>

    <div class="mt-12 rounded-3xl bg-gradient-to-r from-brand-900 to-accent p-8 text-white">
        <h2 class="text-2xl font-extrabold">Join our training community</h2>
        <p class="mt-3 text-cyan-100">Build career-ready skills with practical mentorship and project-based learning.</p>
        <a href="{{ route('ict-training') }}" class="mt-5 inline-flex rounded-full bg-white px-6 py-3 text-sm font-bold text-brand-800">Learn More</a>
    </div>
</section>
@endsection
