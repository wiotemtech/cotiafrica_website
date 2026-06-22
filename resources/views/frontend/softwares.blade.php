@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-slate-900 to-teal-900 text-white pt-40 pb-20">
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Custom Software Development</h1>
        <p class="text-xl text-slate-100 max-w-3xl">
            Platforms engineered for local workflows, public services, and business growth. We build secure, scalable solutions tailored to your needs.
        </p>
    </div>
</section>

<!-- Overview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="{{ asset('assets/images/softpage.jpeg') }}" alt="Software development" class="rounded-2xl shadow-lg w-full">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Build Systems That Scale With You</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    From corporate dashboards and NGO portals to public health systems and e-commerce platforms, we engineer digital solutions that solve real problems.
                </p>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Our software is built for performance, security, and adaptability - ensuring your investment grows with your organization.
                </p>
                <div class="flex gap-4">
                    <a href="{{ route('contactus') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-full bg-teal-700 text-white font-bold hover:bg-teal-800 transition">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-b from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">What We Build</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-globe"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Web Applications</h3>
                <p class="text-slate-600">Responsive, fast-loading web platforms that work on desktop, tablet, and mobile.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Backend Systems</h3>
                <p class="text-slate-600">Powerful APIs and databases designed for reliability, scalability, and data security.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Cloud Solutions</h3>
                <p class="text-slate-600">Deployment, hosting, and infrastructure setup on AWS, Google Cloud, or local servers.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">System Integration</h3>
                <p class="text-slate-600">Connect your existing tools, databases, and services into one unified platform.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="400">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Progressive Web Apps</h3>
                <p class="text-slate-600">App-like web experiences that work offline and load instantly on any device.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="500">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Custom Tools</h3>
                <p class="text-slate-600">Specialized software for unique workflows, processes, and industry requirements.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Technologies We Use</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 text-center">
            <div data-aos="zoom-in">
                <div class="text-5xl text-blue-400 mb-4"><i class="fab fa-js"></i></div>
                <h3 class="font-bold text-slate-900">JavaScript</h3>
            </div>
            <div data-aos="zoom-in" data-aos-delay="50">
                <div class="text-5xl text-red-600 mb-4"><i class="fab fa-laravel"></i></div>
                <h3 class="font-bold text-slate-900">Laravel</h3>
            </div>
            <div data-aos="zoom-in" data-aos-delay="100">
                <div class="text-5xl text-blue-600 mb-4"><i class="fab fa-react"></i></div>
                <h3 class="font-bold text-slate-900">React</h3>
            </div>
            <div data-aos="zoom-in" data-aos-delay="150">
                <div class="text-5xl text-green-500 mb-4"><i class="fab fa-node"></i></div>
                <h3 class="font-bold text-slate-900">Node.js</h3>
            </div>
            <div data-aos="zoom-in" data-aos-delay="200">
                <div class="text-5xl text-blue-400 mb-4"><i class="fab fa-python"></i></div>
                <h3 class="font-bold text-slate-900">Python</h3>
            </div>
            <div data-aos="zoom-in" data-aos-delay="250">
                <div class="text-5xl text-orange-500 mb-4"><i class="fas fa-database"></i></div>
                <h3 class="font-bold text-slate-900">PostgreSQL</h3>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-gradient-to-b from-slate-50 to-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Why Choose Our Software?</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-2xl p-8 border border-slate-200" data-aos="fade-up">
                <div class="text-3xl text-teal-600 mb-4"><i class="fas fa-check-circle"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Secure by Default</h3>
                <p class="text-slate-600">Built with PDPA compliance, encryption, and security best practices from day one.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200" data-aos="fade-up" data-aos-delay="100">
                <div class="text-3xl text-teal-600 mb-4"><i class="fas fa-rocket"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Lightning Fast</h3>
                <p class="text-slate-600">Optimized for speed, scalability, and performance even under high traffic.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200" data-aos="fade-up" data-aos-delay="200">
                <div class="text-3xl text-teal-600 mb-4"><i class="fas fa-expand"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Scalable</h3>
                <p class="text-slate-600">Built to grow with your organization - from startup to enterprise.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200" data-aos="fade-up" data-aos-delay="300">
                <div class="text-3xl text-teal-600 mb-4"><i class="fas fa-headset"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Ongoing Support</h3>
                <p class="text-slate-600">Maintenance, updates, monitoring, and support for the lifetime of your system.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200" data-aos="fade-up" data-aos-delay="400">
                <div class="text-3xl text-teal-600 mb-4"><i class="fas fa-book"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Well Documented</h3>
                <p class="text-slate-600">Clear documentation, training, and knowledge transfer for your team.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 border border-slate-200" data-aos="fade-up" data-aos-delay="500">
                <div class="text-3xl text-teal-600 mb-4"><i class="fas fa-code-branch"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-3">Future-Proof</h3>
                <p class="text-slate-600">Built on modern frameworks and architectures that stand the test of time.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-teal-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Build Your Next Software Solution?</h2>
        <p class="text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
            Share your requirements and we'll design a solution that drives real business results.
        </p>
        <a href="{{ route('contactus') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-full bg-white text-slate-900 font-bold hover:bg-slate-100 transition">
            Start Your Project
        </a>
    </div>
</section>

@endsection
