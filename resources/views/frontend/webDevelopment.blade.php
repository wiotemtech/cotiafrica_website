@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-slate-900 to-teal-900 text-white pt-40 pb-20">
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Web Development</h1>
        <p class="text-xl text-slate-100 max-w-3xl">
            Responsive, secure, and high-performance websites and applications for businesses, institutions, and social impact programs.
        </p>
    </div>
</section>

<!-- Overview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="{{ asset('assets/images/softpage.jpeg') }}" alt="Web development" class="rounded-2xl shadow-lg w-full">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Modern Web Experiences</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    From corporate websites and NGO portals to custom dashboards, we build digital platforms that are fast, accessible, and built for growth.
                </p>
                <p class="text-lg text-slate-600 leading-relaxed">
                    Our web solutions combine beautiful design with powerful functionality, ensuring your digital presence stands out and engages your audience effectively.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-b from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Web Development Services</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Responsive Design</h3>
                <p class="text-slate-600">Interfaces that work perfectly across mobile, tablet, and desktop devices.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-lock"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Secure Architecture</h3>
                <p class="text-slate-600">Reliable backend systems for data management and business logic.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Performance First</h3>
                <p class="text-slate-600">Fast loading speeds and optimized user experience for maximum engagement.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-universal-access"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Accessibility</h3>
                <p class="text-slate-600">WCAG compliant sites that work for everyone, including users with disabilities.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="400">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">SEO Optimized</h3>
                <p class="text-slate-600">Built for search visibility with proper structure and semantic HTML.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="500">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Clean Code</h3>
                <p class="text-slate-600">Maintainable codebase built with best practices and modern frameworks.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Technologies We Use</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="text-center" data-aos="zoom-in">
                <div class="text-5xl text-blue-400 mb-4"><i class="fab fa-html5"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">HTML5</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="50">
                <div class="text-5xl text-orange-500 mb-4"><i class="fab fa-css3"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">CSS3</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-5xl text-yellow-400 mb-4"><i class="fab fa-js"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">JavaScript</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="150">
                <div class="text-5xl text-blue-600 mb-4"><i class="fab fa-react"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">React</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-5xl text-red-600 mb-4"><i class="fab fa-laravel"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">Laravel</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="text-5xl text-purple-600 mb-4"><i class="fab fa-wordpress"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">WordPress</h3>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-teal-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Have an Idea? Let's Build It Together</h2>
        <p class="text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
            Share your concept and our team will help translate it into a practical digital product that drives real results.
        </p>
        <a href="{{ route('contactus') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-full bg-white text-slate-900 font-bold hover:bg-slate-100 transition">
            Contact Us
        </a>
    </div>
</section>

@endsection
