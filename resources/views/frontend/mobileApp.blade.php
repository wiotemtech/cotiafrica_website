@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-slate-900 to-teal-900 text-white pt-40 pb-20">
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">Mobile App Development</h1>
        <p class="text-xl text-slate-100 max-w-3xl">
            Secure and user-friendly mobile applications that help organizations serve users on the go with seamless experience across iOS and Android platforms.
        </p>
    </div>
</section>

<!-- Overview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="{{ asset('assets/images/api.png') }}" alt="Mobile app development" class="rounded-2xl shadow-lg w-full">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold text-slate-900 mb-6">From Concept to Launch</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Whether you need a service-delivery app, workflow app, or customer platform, we design and develop mobile products for real-world performance and long-term maintainability.
                </p>
                <p class="text-lg text-slate-600 leading-relaxed">
                    Our team specializes in creating mobile solutions that engage users and deliver measurable business outcomes. From user research to app store deployment, we handle every aspect of mobile development.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-gradient-to-b from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Mobile Development Capabilities</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Android & iOS</h3>
                <p class="text-slate-600">Native and cross-platform solutions built with React Native and Flutter for maximum compatibility.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">User-Centered Design</h3>
                <p class="text-slate-600">Intuitive interfaces that support adoption across diverse users and use cases.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-server"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Scalable Backend</h3>
                <p class="text-slate-600">Robust APIs and cloud infrastructure designed for growth and reliability.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Security First</h3>
                <p class="text-slate-600">End-to-end encryption and compliance with data protection regulations.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="400">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Performance Optimized</h3>
                <p class="text-slate-600">Fast loading, minimal data usage, and smooth interactions even on slower networks.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="500">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Continuous Support</h3>
                <p class="text-slate-600">Regular updates, bug fixes, and feature enhancements post-launch.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Our Technology Stack</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="text-center" data-aos="zoom-in">
                <div class="text-5xl text-blue-600 mb-4"><i class="fab fa-react"></i></div>
                <h3 class="font-bold text-slate-900">React Native</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="50">
                <div class="text-5xl text-purple-500 mb-4"><i class="fab fa-flutter"></i></div>
                <h3 class="font-bold text-slate-900">Flutter</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-5xl text-green-600 mb-4"><i class="fab fa-android"></i></div>
                <h3 class="font-bold text-slate-900">Android</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="150">
                <div class="text-5xl text-gray-800 mb-4"><i class="fab fa-apple"></i></div>
                <h3 class="font-bold text-slate-900">iOS</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-5xl text-yellow-500 mb-4"><i class="fab fa-js"></i></div>
                <h3 class="font-bold text-slate-900">JavaScript</h3>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-teal-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Build Your Mobile App?</h2>
        <p class="text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
            Collaborate with our team to design and ship your mobile app faster. Let's turn your idea into a scalable product.
        </p>
        <a href="{{ route('contactus') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-full bg-white text-slate-900 font-bold hover:bg-slate-100 transition">
            Contact Us
        </a>
    </div>
</section>

@endsection
