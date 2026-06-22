@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-950 via-slate-900 to-teal-900 pt-40 pb-24 text-white">
    <div class="pointer-events-none absolute -left-24 top-16 h-72 w-72 rounded-full bg-teal-400/20 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-16 bottom-8 h-72 w-72 rounded-full bg-cyan-300/20 blur-3xl"></div>

    <div class="container relative z-10 mx-auto px-4">
        <div class="mx-auto max-w-5xl text-center">
            <span class="mb-5 inline-flex items-center rounded-full border border-teal-300/40 bg-teal-300/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-teal-100">
                East Africa Innovation Hub
            </span>
            <h1 class="text-4xl font-bold leading-tight md:text-6xl">
                Building practical digital systems that move communities and institutions forward.
            </h1>
            <p class="mx-auto mt-6 max-w-3xl text-lg text-slate-200 md:text-xl">
                We deliver compliant software, workforce-ready training, and technology partnerships that create measurable inclusion and sustainable growth.
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('contactus') }}" class="inline-flex h-12 items-center justify-center rounded-full bg-white px-8 font-bold text-slate-900 transition hover:-translate-y-0.5 hover:bg-slate-100">
                    Start a Partnership
                </a>
                <a href="{{ route('ict-training') }}" class="inline-flex h-12 items-center justify-center rounded-full border border-white/70 px-8 font-bold text-white transition hover:-translate-y-0.5 hover:bg-white hover:text-slate-900">
                    Explore Training Tracks
                </a>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-4 text-left md:grid-cols-3">
                <div class="rounded-xl border border-white/15 bg-white/5 p-4">
                    <p class="text-xs uppercase tracking-widest text-teal-200">Location</p>
                    <p class="mt-2 text-sm text-slate-100">TISC, UTC-Lira</p>
                </div>
                <div class="rounded-xl border border-white/15 bg-white/5 p-4">
                    <p class="text-xs uppercase tracking-widest text-teal-200">Compliance</p>
                    <p class="mt-2 text-sm text-slate-100">Aligned with PDPA 2019 and national IT standards</p>
                </div>
                <div class="rounded-xl border border-white/15 bg-white/5 p-4">
                    <p class="text-xs uppercase tracking-widest text-teal-200">Reach</p>
                    <p class="mt-2 text-sm text-slate-100">Underserved communities across East Africa</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="bg-gradient-to-b from-white to-slate-50 py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="rounded-2xl bg-gradient-to-br from-teal-600 to-teal-700 p-8 text-white shadow-lg ring-1 ring-teal-500/40" data-aos="fade-up">
                <p class="text-xs uppercase tracking-widest text-teal-100">Impact Goal</p>
                <h3 class="mt-3 text-4xl font-bold">1 Million</h3>
                <p class="mt-2 text-lg text-teal-100">Lives impacted by 2035</p>
                <p class="mt-3 text-sm text-teal-200">Through tech education, localized software, and digital inclusion.</p>
            </div>
            <div class="rounded-2xl bg-white p-8 shadow-lg ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="100">
                <p class="text-xs uppercase tracking-widest text-blue-700">Core Focus</p>
                <h3 class="mt-3 text-2xl font-bold text-slate-900">E-services at scale</h3>
                <p class="mt-2 text-sm text-slate-600">Health, education, workflow management, and automation for local realities.</p>
            </div>
            <div class="rounded-2xl bg-white p-8 shadow-lg ring-1 ring-slate-200" data-aos="fade-up" data-aos-delay="200">
                <p class="text-xs uppercase tracking-widest text-purple-700">Audience</p>
                <h3 class="mt-3 text-2xl font-bold text-slate-900">Students to institutions</h3>
                <p class="mt-2 text-sm text-slate-600">Programs and platforms built for learners, partners, and SMEs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Partner Section -->
<section class="py-20 bg-white border-y border-slate-200">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div data-aos="fade-right">
                <p class="text-teal-600 font-semibold mb-2">In Collaboration With</p>
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Technology Innovation Support Centre (TISC), UTC-Lira</h2>
                <p class="text-slate-600 text-lg">Partnering to deliver innovation support and digital transformation across Northern Uganda and East Africa.</p>
            </div>
            <div class="flex gap-8 justify-center" data-aos="fade-left">
                <img src="{{ asset('assets/images/utc.jpg') }}" alt="UTC Lira" class="h-24 rounded-lg">
                <img src="{{ asset('assets/images/logo7.png') }}" alt="CodeToInnovate Africa" class="h-24 rounded-lg">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-20 bg-gradient-to-b from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Strategic Direction</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-gradient-to-br from-slate-900 to-slate-800 text-white rounded-2xl p-8 shadow-lg" data-aos="fade-right">
                <h3 class="text-2xl font-bold mb-4">Vision</h3>
                <p class="text-slate-200 leading-relaxed">
                    To establish CodeToInnovate Africa as the leading regional hub for technology innovation, data-driven software engineering, and digital inclusion across East Africa.
                </p>
            </div>
            <div class="bg-white border-2 border-slate-200 rounded-2xl p-8 shadow-lg" data-aos="fade-left">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">Mission</h3>
                <p class="text-slate-600 leading-relaxed">
                    To empower underserved populations, public institutions, and SMEs by engineering scalable software platforms, bridging digital literacy gaps, and deploying resilient e-services.
                </p>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg border-l-4 border-teal-600" data-aos="fade-up">
                <span class="text-5xl font-bold text-teal-600 block mb-3">01</span>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Regional Digital Inclusivity</h3>
                <p class="text-slate-600">Designing practical digital access for Northern Uganda and other rural or off-grid communities.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 shadow-lg border-l-4 border-blue-600" data-aos="fade-up" data-aos-delay="100">
                <span class="text-5xl font-bold text-blue-600 block mb-3">02</span>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Absolute Regulatory Compliance</h3>
                <p class="text-slate-600">Building platforms in alignment with national IT standards, NISF, and the PDPA 2019.</p>
            </div>
            <div class="bg-white rounded-2xl p-8 shadow-lg border-l-4 border-purple-600" data-aos="fade-up" data-aos-delay="200">
                <span class="text-5xl font-bold text-purple-600 block mb-3">03</span>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Public-Private Collaboration</h3>
                <p class="text-slate-600">Creating interoperable, cloud-ready services that connect with government and growth ecosystems.</p>
            </div>
        </div>
    </div>
</section>

<!-- Who We Serve Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Who We Serve</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-teal-50 to-blue-50 rounded-2xl p-8 border border-teal-200 shadow-lg hover:shadow-xl transition" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">For Students</h3>
                <p class="text-slate-600 mb-6">Build job-ready software, data, and digital operations skills through training, internships, and mentorship.</p>
                <a href="{{ route('programming') }}" class="text-teal-600 font-semibold hover:text-teal-700">Explore learning programs →</a>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 border border-blue-200 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">For Partners</h3>
                <p class="text-slate-600 mb-6">Work with an innovation hub that can co-design pilots, MVPs, and local implementation strategies.</p>
                <a href="{{ route('contactus') }}" class="text-blue-600 font-semibold hover:text-blue-700">Discuss a partnership →</a>
            </div>
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-200 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">For Institutions & SMEs</h3>
                <p class="text-slate-600 mb-6">Deploy secure web systems, workflow tools, and digital transformation support tailored to local realities.</p>
                <a href="{{ route('software') }}" class="text-purple-600 font-semibold hover:text-purple-700">View service capabilities →</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-b from-slate-50 to-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-4">Our Services</h2>
        <p class="text-xl text-slate-600 text-center max-w-3xl mx-auto mb-16">Technology delivery with practical adoption in mind. Our offer combines software engineering, training, infrastructure, and incubation support.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up">
                <div class="text-4xl text-teal-600 mb-4"><i class="fas fa-code"></i></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Custom Software</h3>
                <p class="text-slate-600">Platforms engineered for local workflows, public services, and business growth.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl text-teal-600 mb-4"><i class="fas fa-hospital"></i></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">E-Health & E-Education</h3>
                <p class="text-slate-600">Digital tools that improve access, continuity, reporting, and service coordination.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl text-teal-600 mb-4"><i class="fas fa-lock"></i></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Digital Security</h3>
                <p class="text-slate-600">Reliable systems, cloud readiness, and governance-aware deployment support.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl text-teal-600 mb-4"><i class="fas fa-graduation-cap"></i></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Skills Training</h3>
                <p class="text-slate-600">Applied training programs that move learners from theory to production-ready practice.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="400">
                <div class="text-4xl text-teal-600 mb-4"><i class="fas fa-rocket"></i></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Startup Incubator</h3>
                <p class="text-slate-600">Rapid validation, technical advisory, and product execution for emerging founders.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="500">
                <div class="text-4xl text-teal-600 mb-4"><i class="fas fa-leaf"></i></div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Green Tech</h3>
                <p class="text-slate-600">Sustainable digital systems that connect efficiency, monitoring, and community impact.</p>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="bg-gradient-to-r from-slate-900 to-teal-900 py-20 text-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <p class="mb-2 text-xs font-semibold uppercase tracking-widest text-teal-200">Training Journeys</p>
                <h2 class="mb-6 text-4xl font-bold">Real skills that translate into real opportunity</h2>
                <p class="text-lg leading-relaxed text-slate-200">
                    We connect digital literacy, project-based learning, and inclusion-focused mentorship to prepare the next generation of tech leaders.
                </p>
            </div>
            <div class="space-y-4" data-aos="fade-left">
                <a href="{{ route('programming') }}" class="block rounded-xl border border-white/15 bg-white/10 p-6 backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20">
                    <h3 class="text-2xl font-bold mb-2">Learn Programming</h3>
                    <p class="text-slate-200">Hands-on pathways in modern software development.</p>
                </a>
                <a href="{{ route('ict-training') }}" class="block rounded-xl border border-white/15 bg-white/10 p-6 backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20">
                    <h3 class="text-2xl font-bold mb-2">Internships & ICT Training</h3>
                    <p class="text-slate-200">Professional exposure, guided practice, and workplace readiness.</p>
                </a>
                <a href="{{ route('women-in-tech') }}" class="block rounded-xl border border-white/15 bg-white/10 p-6 backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20">
                    <h3 class="text-2xl font-bold mb-2">Women in Tech</h3>
                    <p class="text-slate-200">Mentorship and access-building for women entering technical careers.</p>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Ready to Build a Local Solution With Regional Reach?</h2>
        <p class="text-xl text-slate-600 mb-8 max-w-2xl mx-auto">
            Visit us at TISC, UTC-Lira, P.O. Box 331626, Lira, Uganda, or contact the team to discuss partnerships, training opportunities, and product development.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('contactus') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-full bg-teal-700 text-white font-bold hover:bg-teal-800 transition">
                Contact the Team
            </a>
            <a href="https://www.cotiafrica.com/" target="_blank" class="inline-flex items-center justify-center h-12 px-8 rounded-full border-2 border-teal-700 text-teal-700 font-bold hover:bg-teal-50 transition">
                Visit cotiafrica.com
            </a>
        </div>
    </div>
</section>

@endsection
