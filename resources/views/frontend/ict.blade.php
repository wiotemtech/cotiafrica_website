@extends('layouts.app')

@section('content')
<section class="bg-slate-900 py-16 text-white">
    <div class="mx-auto max-w-7xl px-4">
        <h1 class="text-4xl font-extrabold md:text-6xl">Corporate ICT Training</h1>
        <p class="mt-4 max-w-3xl text-slate-300">Transform your workforce with practical digital skills tailored to your organization’s operations and growth goals.</p>
    </div>
</section>

<section class="mx-auto max-w-7xl px-4 py-16">
    <div class="grid items-center gap-8 md:grid-cols-2">
        <img src="{{ asset('assets/images/ict train.jpg') }}" alt="Corporate ICT training" class="h-80 w-full rounded-3xl object-cover shadow-xl">
        <article class="rounded-3xl bg-white p-8 shadow-lg ring-1 ring-slate-200">
            <h2 class="text-2xl font-extrabold">Program overview</h2>
            <p class="mt-4 leading-8 text-slate-600">Our corporate ICT programs help teams improve cybersecurity practices, digital operations, and data-driven decision-making through guided practical sessions.</p>
        </article>
    </div>

    <div class="mt-10 grid gap-4 md:grid-cols-3">
        <div class="rounded-2xl bg-white p-6 ring-1 ring-slate-200"><h3 class="font-bold">Cybersecurity Essentials</h3><p class="mt-2 text-slate-600">Protect systems, staff, and data with practical security practices.</p></div>
        <div class="rounded-2xl bg-white p-6 ring-1 ring-slate-200"><h3 class="font-bold">Computer Networking</h3><p class="mt-2 text-slate-600">Improve infrastructure reliability and internal connectivity.</p></div>
        <div class="rounded-2xl bg-white p-6 ring-1 ring-slate-200"><h3 class="font-bold">Data Analysis</h3><p class="mt-2 text-slate-600">Turn organizational data into clear insight for better decisions.</p></div>
    </div>

    <article class="mt-10 rounded-3xl bg-white p-8 shadow-lg ring-1 ring-slate-200">
        <h2 class="text-2xl font-extrabold">Who can apply</h2>
        <ul class="mt-4 list-disc space-y-2 pl-5 text-slate-600">
            <li>IT professionals upgrading practical ICT skills.</li>
            <li>Students and graduates preparing for technology roles.</li>
            <li>Educators integrating digital tools in teaching practice.</li>
            <li>Entrepreneurs optimizing operations with digital systems.</li>
        </ul>
        <a href="{{ route('contactus') }}" class="mt-6 inline-flex rounded-full bg-brand-600 px-6 py-3 text-sm font-bold text-white">Enroll Now</a>
    </article>
</section>
@endsection
