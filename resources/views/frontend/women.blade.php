@extends('layouts.app')

@section('content')
<section class="bg-slate-900 py-16 text-white">
    <div class="mx-auto max-w-7xl px-4">
        <h1 class="text-4xl font-extrabold md:text-6xl">Women in Tech</h1>
        <p class="mt-4 max-w-3xl text-slate-300">Expanding access, mentorship, and leadership pathways for women across the technology ecosystem.</p>
    </div>
</section>

<section class="mx-auto max-w-7xl px-4 py-16">
    <div class="grid items-center gap-8 md:grid-cols-2">
        <img src="{{ asset('assets/images/rr.jpg') }}" alt="Women in tech" class="h-80 w-full rounded-3xl object-cover shadow-xl">
        <article class="rounded-3xl bg-white p-8 shadow-lg ring-1 ring-slate-200">
            <h2 class="text-2xl font-extrabold">About the initiative</h2>
            <p class="mt-4 leading-8 text-slate-600">Through mentorship, networking, and specialized training, this program supports women in building confidence, technical depth, and career momentum in technology.</p>
        </article>
    </div>

    <div class="mt-10 grid gap-4 md:grid-cols-3">
        <div class="rounded-2xl bg-white p-6 ring-1 ring-slate-200"><h3 class="font-bold">Coding and Development</h3><p class="mt-2 text-slate-600">Practical pathways into software development and digital product work.</p></div>
        <div class="rounded-2xl bg-white p-6 ring-1 ring-slate-200"><h3 class="font-bold">Community Building</h3><p class="mt-2 text-slate-600">Supportive networks that connect peers, mentors, and opportunities.</p></div>
        <div class="rounded-2xl bg-white p-6 ring-1 ring-slate-200"><h3 class="font-bold">Education and Mentorship</h3><p class="mt-2 text-slate-600">Guided growth for the next generation of women tech leaders.</p></div>
    </div>

    <div class="mt-12 rounded-3xl bg-gradient-to-r from-brand-900 to-accent p-8 text-white">
        <h2 class="text-2xl font-extrabold">Join our talent community</h2>
        <p class="mt-3 text-cyan-100">Become part of a vibrant network shaping the future of technology inclusively.</p>
        <a href="{{ route('ict-training') }}" class="mt-5 inline-flex rounded-full bg-white px-6 py-3 text-sm font-bold text-brand-800">Learn More</a>
    </div>
</section>
@endsection
