@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-950 via-slate-900 to-teal-900 pt-40 pb-16 text-white">
    <div class="pointer-events-none absolute -right-10 top-10 h-64 w-64 rounded-full bg-teal-400/20 blur-3xl"></div>
    <div class="container mx-auto px-4 text-center">
        <span class="mb-4 inline-block rounded-full border border-teal-300/40 bg-teal-300/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.2em] text-teal-100">Let's Talk</span>
        <h1 class="mb-4 text-5xl font-bold md:text-6xl">Contact Us</h1>
        <p class="mx-auto max-w-2xl text-xl text-slate-200">Need support, partnership, or project guidance? Our team is ready to help.</p>
    </div>
</section>

<!-- Contact Content Section -->
<section class="bg-gradient-to-b from-teal-50 to-slate-50 py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Get in Touch -->
            <div class="rounded-2xl bg-white p-10 shadow-lg ring-1 ring-slate-200" data-aos="fade-right">
                <h3 class="text-3xl font-bold text-slate-900 mb-8">Get in Touch</h3>
                
                <div class="space-y-6">
                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                        <strong class="mb-2 block text-lg text-teal-700">Address</strong>
                        <p class="text-slate-600">TISC, UTC-Lira, P.O. Box 331626, Lira, Uganda</p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                        <strong class="mb-2 block text-lg text-teal-700">Phone</strong>
                        <p class="text-slate-600">+256 779 512 100 / +256 759 512 100</p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                        <strong class="mb-2 block text-lg text-teal-700">Email</strong>
                        <p class="text-slate-600">codetoinnovateafrica256@gmail.com</p>
                    </div>

                    <div class="pt-6 border-t">
                        <h5 class="mb-4 font-bold text-slate-900">Follow Us</h5>
                        <div class="flex gap-4">
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-teal-100 text-teal-700 transition hover:-translate-y-0.5 hover:bg-teal-700 hover:text-white">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-teal-100 text-teal-700 transition hover:-translate-y-0.5 hover:bg-teal-700 hover:text-white">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-teal-100 text-teal-700 transition hover:-translate-y-0.5 hover:bg-teal-700 hover:text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-teal-100 text-teal-700 transition hover:-translate-y-0.5 hover:bg-teal-700 hover:text-white">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="rounded-2xl bg-white p-10 shadow-lg ring-1 ring-slate-200" data-aos="fade-left">
                <h3 class="text-3xl font-bold text-slate-900 mb-8">Send Us a Message</h3>
                
                <form class="space-y-6">
                    <div>
                        <label for="fullName" class="mb-2 block font-semibold text-slate-700">Full Name</label>
                        <input type="text" id="fullName" placeholder="Enter your full name" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>

                    <div>
                        <label for="email" class="mb-2 block font-semibold text-slate-700">Email</label>
                        <input type="email" id="email" placeholder="Enter your email" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>

                    <div>
                        <label for="subject" class="mb-2 block font-semibold text-slate-700">Subject</label>
                        <input type="text" id="subject" placeholder="Enter your subject" class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-teal-500">
                    </div>

                    <div>
                        <label for="message" class="mb-2 block font-semibold text-slate-700">Message</label>
                        <textarea id="message" rows="5" placeholder="Your message..." class="w-full rounded-lg border border-slate-300 bg-slate-50 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
                    </div>

                    <button type="submit" class="w-full rounded-lg bg-gradient-to-r from-teal-600 to-teal-700 py-3 font-bold text-white transition hover:-translate-y-0.5 hover:shadow-lg">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
