<footer class="relative overflow-hidden bg-slate-950 text-white">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(45,212,191,0.15),transparent_40%)]"></div>
    <div class="container relative mx-auto px-4 py-16">
        <div class="mb-12 grid grid-cols-1 gap-8 border-b border-slate-800 pb-12 md:grid-cols-4">
            <!-- About Section -->
            <div class="text-center md:text-left">
                <img src="{{ asset('assets/images/logo7.png') }}" alt="CodeToInnovate Africa logo" class="mx-auto mb-4 h-20 w-20 rounded-xl border border-slate-800 bg-slate-900 p-2 object-contain md:mx-0">
                <h5 class="mb-3 text-sm font-bold uppercase tracking-[0.22em] text-teal-200">CodeToInnovate Africa</h5>
                <p class="text-sm leading-relaxed text-slate-300">
                    A technology innovation hub and enterprise software engineering firm building inclusive,
                    compliant digital systems from Northern Uganda.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h5 class="mb-4 text-sm font-bold uppercase tracking-[0.22em] text-teal-200">Quick Links</h5>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-slate-300 transition hover:pl-1 hover:text-white">Home</a></li>
                    <li><a href="{{ route('whyus') }}" class="text-slate-300 transition hover:pl-1 hover:text-white">Why Us</a></li>
                    <li><a href="{{ route('blogs') }}" class="text-slate-300 transition hover:pl-1 hover:text-white">Blog</a></li>
                    <li><a href="{{ route('contactus') }}" class="text-slate-300 transition hover:pl-1 hover:text-white">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h5 class="mb-4 text-sm font-bold uppercase tracking-[0.22em] text-teal-200">Contact</h5>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start gap-2">
                        <i class="fas fa-envelope text-teal-400 mt-1 flex-shrink-0"></i>
                        <a href="mailto:codetoinnovateafrica256@gmail.com" class="text-slate-300 transition hover:text-white">codetoinnovateafrica256@gmail.com</a>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-phone text-teal-400 mt-1 flex-shrink-0"></i>
                        <span class="text-slate-300">+256 779 512 100 / +256 759 512 100</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fas fa-map-marker-alt text-teal-400 mt-1 flex-shrink-0"></i>
                        <span class="text-slate-300">TISC, UTC-Lira, P.O. Box 331626, Lira, Uganda</span>
                    </li>
                </ul>
            </div>

            <!-- Compliance & Social -->
            <div>
                <h5 class="mb-4 text-sm font-bold uppercase tracking-[0.22em] text-teal-200">Footprint</h5>
                <p class="mb-4 text-sm leading-relaxed text-slate-300">
                    Systems aligned with the Data Protection and Privacy Act (2019).
                </p>
                <p class="text-xs leading-relaxed text-slate-400">
                    Follow: @CodeToInnovateA on X and CodeToInnovate Africa on LinkedIn, TikTok, and Instagram.
                </p>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-2 text-center text-sm text-slate-400">
            <p>&copy; {{ date('Y') }} CodeToInnovate Africa. All Rights Reserved.</p>
        </div>
    </div>
</footer>