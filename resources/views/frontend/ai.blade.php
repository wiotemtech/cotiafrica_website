@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-slate-900 to-teal-900 text-white pt-40 pb-20">
    <div class="container mx-auto px-4 relative z-10">
        <h1 class="text-5xl md:text-6xl font-bold mb-6">AI & Machine Learning</h1>
        <p class="text-xl text-slate-100 max-w-3xl">
            We integrate AI and data-driven intelligence into practical systems that improve decisions, automation, and service quality across your operations.
        </p>
    </div>
</section>

<!-- Overview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <img src="{{ asset('assets/images/ai.jpg') }}" alt="AI and machine learning" class="rounded-2xl shadow-lg w-full">
            </div>
            <div data-aos="fade-left">
                <h2 class="text-4xl font-bold text-slate-900 mb-6">Intelligence That Supports Operations</h2>
                <p class="text-lg text-slate-600 leading-relaxed mb-6">
                    Our AI services include predictive analytics, natural language processing, and data workflows that enable organizations to act faster and more accurately.
                </p>
                <p class="text-lg text-slate-600 leading-relaxed">
                    From automating routine tasks to uncovering hidden patterns in your data, we bring AI solutions that are practical, explainable, and aligned with your business goals.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-b from-slate-50 to-blue-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">AI Capabilities</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Predictive Analytics</h3>
                <p class="text-slate-600">Forecast trends and improve planning with meaningful data models that drive strategic decisions.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-comments"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">NLP & AI Assistants</h3>
                <p class="text-slate-600">Automate support and generate insights using natural language interfaces and chatbots.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Computer Vision</h3>
                <p class="text-slate-600">Use visual intelligence for monitoring, quality checks, document processing, and automated records management.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-database"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Data Engineering</h3>
                <p class="text-slate-600">Build robust data pipelines and warehouses that fuel intelligent decision-making.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="400">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-sitemap"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Knowledge Systems</h3>
                <p class="text-slate-600">Implement expert systems and knowledge graphs that encode domain expertise into intelligent systems.</p>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition" data-aos="fade-up" data-aos-delay="500">
                <div class="text-4xl text-teal-600 mb-4">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Custom ML Models</h3>
                <p class="text-slate-600">Develop and deploy machine learning models tailored to your specific operational needs.</p>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-slate-900 text-center mb-16">Tools & Frameworks We Use</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <div class="text-center" data-aos="zoom-in">
                <div class="text-5xl text-blue-600 mb-4"><i class="fab fa-python"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">Python</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="50">
                <div class="text-5xl text-orange-500 mb-4"><i class="fas fa-cube"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">TensorFlow</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="text-5xl text-purple-600 mb-4"><i class="fas fa-braille"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">PyTorch</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="150">
                <div class="text-5xl text-blue-400 mb-4"><i class="fas fa-code"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">Scikit-Learn</h3>
            </div>
            <div class="text-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="text-5xl text-red-600 mb-4"><i class="fas fa-chart-bar"></i></div>
                <h3 class="font-bold text-slate-900 text-sm">Analytics</h3>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-slate-900 to-teal-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Unlock Intelligence in Your Operations?</h2>
        <p class="text-xl text-slate-200 mb-8 max-w-2xl mx-auto">
            Let our AI and ML experts assess your data opportunities and design solutions that drive real business impact.
        </p>
        <a href="{{ route('contactus') }}" class="inline-flex items-center justify-center h-12 px-8 rounded-full bg-white text-slate-900 font-bold hover:bg-slate-100 transition">
            Contact Us
        </a>
    </div>
</section>

@endsection
