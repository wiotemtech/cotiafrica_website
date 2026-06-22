@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden bg-slate-950 pt-40 pb-20 text-white c2i-grid-glow">
    <div class="pointer-events-none absolute -left-24 top-0 h-80 w-80 rounded-full bg-teal-400/25 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-16 bottom-0 h-80 w-80 rounded-full bg-sky-400/20 blur-3xl"></div>

    <div class="container relative z-10 mx-auto px-4">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-8" data-aos="fade-right">
                <span class="c2i-chip">Why CodeToInnovate</span>
                <h1 class="mt-5 text-4xl font-bold leading-tight md:text-6xl">We design technology that works in real contexts, not just slides.</h1>
                <p class="mt-6 max-w-3xl text-lg text-slate-200 md:text-xl">
                    CodeToInnovate Africa combines software engineering, digital capacity building, and compliance-led execution to help institutions and communities move from intention to measurable impact.
                </p>
            </div>

            <div class="lg:col-span-4" data-aos="fade-left">
                <div class="c2i-surface rounded-2xl bg-white/10 p-6 backdrop-blur-sm">
                    <p class="text-xs uppercase tracking-widest text-teal-200">Operating Principle</p>
                    <p class="mt-3 text-sm leading-relaxed text-slate-100">Every initiative must be useful, compliant, scalable, and locally adoptable from day one.</p>
                    <div class="mt-5 space-y-2 text-sm text-slate-200">
                        <p><i class="fas fa-check mr-2 text-teal-300"></i>Inclusion-first service design</p>
                        <p><i class="fas fa-check mr-2 text-teal-300"></i>Execution with public-interest outcomes</p>
                        <p><i class="fas fa-check mr-2 text-teal-300"></i>Engineering discipline and accountability</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12">
            <article class="c2i-surface-soft rounded-2xl p-8 md:p-10" data-aos="fade-up">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-teal-700">Why Teams Choose Us</p>
                <h2 class="mt-4 text-3xl font-bold text-slate-900 md:text-4xl">Execution strength with social relevance</h2>
                <p class="mt-5 text-slate-600">We bring strategy, engineering, and field understanding together so projects launch faster, stay compliant, and deliver practical value.</p>
                <ul class="mt-8 space-y-4">
                    <li class="flex gap-3"><span class="mt-1 text-teal-600"><i class="fas fa-circle-check"></i></span><span class="text-slate-700"><strong>Proven Delivery</strong> across NGOs, schools, SMEs, and institutional programs.</span></li>
                    <li class="flex gap-3"><span class="mt-1 text-teal-600"><i class="fas fa-circle-check"></i></span><span class="text-slate-700"><strong>Compliance by Design</strong> with PDPA and governance-conscious implementation.</span></li>
                    <li class="flex gap-3"><span class="mt-1 text-teal-600"><i class="fas fa-circle-check"></i></span><span class="text-slate-700"><strong>Contextual Insight</strong> tuned for East African adoption realities.</span></li>
                </ul>
            </article>

            <article class="c2i-surface rounded-2xl p-8 md:p-10" data-aos="fade-up" data-aos-delay="100">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-sky-700">What You Get</p>
                <h2 class="mt-4 text-3xl font-bold text-slate-900 md:text-4xl">A partner, not just a vendor</h2>
                <p class="mt-5 text-slate-600">From architecture to user onboarding, we stay involved to ensure deployment quality and long-term sustainability.</p>
                <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                        <p class="text-xs uppercase tracking-widest text-slate-500">Support Mode</p>
                        <p class="mt-2 font-semibold text-slate-900">Hands-on implementation</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                        <p class="text-xs uppercase tracking-widest text-slate-500">Transfer</p>
                        <p class="mt-2 font-semibold text-slate-900">Skills and documentation included</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                        <p class="text-xs uppercase tracking-widest text-slate-500">Approach</p>
                        <p class="mt-2 font-semibold text-slate-900">Co-design with stakeholders</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                        <p class="text-xs uppercase tracking-widest text-slate-500">Outcome</p>
                        <p class="mt-2 font-semibold text-slate-900">Adopted systems and measurable impact</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="bg-gradient-to-b from-slate-100 to-slate-50 py-20">
    <div class="container mx-auto px-4">
        <div class="mb-14 text-center">
            <p class="text-xs font-bold uppercase tracking-[0.2em] text-teal-700">Our Foundation</p>
            <h2 class="mt-3 text-4xl font-bold text-slate-900">Vision, Mission, and the 2035 Target</h2>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <article class="c2i-surface-soft rounded-2xl p-8" data-aos="fade-up">
                <i class="fas fa-eye text-3xl text-teal-700"></i>
                <h3 class="mt-4 text-2xl font-bold text-slate-900">Vision</h3>
                <p class="mt-3 text-slate-600">To become East Africa's trusted regional hub for technology innovation, data-informed software engineering, and digital inclusion.</p>
            </article>

            <article class="c2i-surface-soft rounded-2xl p-8" data-aos="fade-up" data-aos-delay="100">
                <i class="fas fa-bullseye text-3xl text-sky-700"></i>
                <h3 class="mt-4 text-2xl font-bold text-slate-900">Mission</h3>
                <p class="mt-3 text-slate-600">To empower underserved populations, institutions, and SMEs through resilient digital platforms and workforce-ready skills pathways.</p>
            </article>

            <article class="c2i-surface-soft rounded-2xl p-8" data-aos="fade-up" data-aos-delay="200">
                <i class="fas fa-flag-checkered text-3xl text-violet-700"></i>
                <h3 class="mt-4 text-2xl font-bold text-slate-900">2035 Goal</h3>
                <p class="mt-3 text-slate-600">Impact 1 million lives through local software, digital literacy acceleration, and inclusive economic opportunities.</p>
            </article>
        </div>
    </div>
</section>

<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
            <div data-aos="fade-right">
                <h3 class="text-3xl font-bold text-slate-900">Team Expertise</h3>
                <ul class="mt-6 space-y-4 text-slate-700">
                    <li class="flex gap-3"><i class="fas fa-angles-right mt-1 text-teal-600"></i><span><strong>Full-Stack Engineering</strong> for robust product architecture.</span></li>
                    <li class="flex gap-3"><i class="fas fa-angles-right mt-1 text-teal-600"></i><span><strong>Data and Analytics</strong> for better policy and operational decisions.</span></li>
                    <li class="flex gap-3"><i class="fas fa-angles-right mt-1 text-teal-600"></i><span><strong>Security and Compliance</strong> embedded into every release cycle.</span></li>
                    <li class="flex gap-3"><i class="fas fa-angles-right mt-1 text-teal-600"></i><span><strong>Training and Mentorship</strong> that turns learning into employability.</span></li>
                    <li class="flex gap-3"><i class="fas fa-angles-right mt-1 text-teal-600"></i><span><strong>Public Sector Product Design</strong> for service-oriented systems.</span></li>
                </ul>
            </div>

            <div class="c2i-surface rounded-2xl p-8" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-slate-900">Commitment Standards</h3>
                <div class="mt-6 space-y-4">
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4"><strong class="text-slate-900">User-Centered Design</strong><p class="mt-1 text-sm text-slate-600">Solutions shaped around real user behavior and adoption barriers.</p></div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4"><strong class="text-slate-900">Transparent Delivery</strong><p class="mt-1 text-sm text-slate-600">Clear timelines, clear communication, and shared accountability.</p></div>
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-4"><strong class="text-slate-900">Long-Term Sustainability</strong><p class="mt-1 text-sm text-slate-600">Maintainable systems, local capacity transfer, and measurable outcomes.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-slate-950 py-20 text-white">
    <div class="container mx-auto px-4 text-center">
        <p class="text-xs font-bold uppercase tracking-[0.2em] text-teal-200">Partnership Invitation</p>
        <h2 class="mt-4 text-4xl font-bold md:text-5xl">Build with a team that combines purpose and precision.</h2>
        <p class="mx-auto mt-5 max-w-2xl text-lg text-slate-300">If you are planning a digital initiative, we can help you scope, design, build, and implement it responsibly.</p>
        <div class="mt-9 flex flex-wrap justify-center gap-4">
            <a href="{{ route('contactus') }}" class="inline-flex h-12 items-center justify-center rounded-full bg-white px-8 font-bold text-slate-900 transition hover:bg-slate-100">Contact Us</a>
            <a href="{{ route('home') }}" class="inline-flex h-12 items-center justify-center rounded-full border border-white/70 px-8 font-bold text-white transition hover:bg-white hover:text-slate-900">Explore Services</a>
        </div>
    </div>
</section>

@endsection
