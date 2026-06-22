<header class="fixed top-0 z-50 w-full border-b border-slate-200/70 bg-white/95 backdrop-blur">
    <div class="bg-gradient-to-r from-slate-900 to-teal-900 text-slate-100">
        <div class="container mx-auto flex flex-wrap items-center justify-between gap-3 px-4 py-2 text-xs md:text-sm">
            <span class="inline-flex items-center gap-2"><i class="fas fa-location-dot"></i> TISC, UTC-Lira, Lira, Uganda</span>
            <span class="inline-flex items-center gap-2"><i class="fas fa-phone"></i> +256 779 512 100 / +256 759 512 100</span>
            <span class="inline-flex items-center gap-2"><i class="fas fa-envelope"></i> codetoinnovateafrica256@gmail.com</span>
        </div>
    </div>

    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-3 md:py-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-slate-900 transition hover:opacity-90">
                <img src="{{ asset('assets/images/logo.png') }}" width="44" alt="CodeToInnovate Africa logo" class="rounded-md">
                <div class="leading-tight">
                    <strong class="block text-base md:text-lg">CodeToInnovate Africa</strong>
                    <small class="text-xs text-slate-500">Digital transformation and inclusion</small>
                </div>
            </a>

            <nav class="hidden items-center gap-7 md:flex">
                <a href="{{ route('home') }}" class="font-semibold text-slate-700 transition hover:text-teal-700">Home</a>
                <a href="{{ route('whyus') }}" class="font-semibold text-slate-700 transition hover:text-teal-700">Why Us</a>
                <a href="{{ route('blogs') }}" class="font-semibold text-slate-700 transition hover:text-teal-700">Blogs</a>
                <a href="{{ route('contactus') }}" class="font-semibold text-slate-700 transition hover:text-teal-700">Contact</a>
            </nav>

            <a href="{{ route('contactus') }}" class="hidden h-11 items-center justify-center rounded-full bg-teal-700 px-6 font-semibold text-white transition hover:bg-teal-800 md:inline-flex">
                Work With Us
            </a>

            <details class="relative md:hidden">
                <summary class="list-none cursor-pointer rounded-lg border border-slate-300 p-2 text-slate-900">
                    <i class="fas fa-bars text-xl"></i>
                </summary>
                <div class="absolute right-0 mt-3 w-64 rounded-xl border border-slate-200 bg-white p-3 shadow-xl">
                    <a href="{{ route('home') }}" class="block rounded-lg px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-teal-700">Home</a>
                    <a href="{{ route('whyus') }}" class="mt-1 block rounded-lg px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-teal-700">Why Us</a>
                    <a href="{{ route('blogs') }}" class="mt-1 block rounded-lg px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-teal-700">Blogs</a>
                    <a href="{{ route('contactus') }}" class="mt-1 block rounded-lg px-3 py-2 text-slate-700 hover:bg-slate-50 hover:text-teal-700">Contact</a>
                </div>
            </details>
        </div>
    </div>
</header>
