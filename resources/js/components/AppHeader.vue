<template>
  <header :class="['fixed top-0 z-50 w-full transition-all duration-300', scrolled ? 'shadow-lg' : '']">
    <!-- Topbar -->
    <div style="background:linear-gradient(90deg,#0d1b2a,#1e3a5f)">
      <div class="container mx-auto flex items-center justify-between gap-4 px-4 py-2 text-xs text-slate-300">
        <span class="flex items-center gap-1.5 shrink-0">
          <i class="fas fa-location-dot text-[10px]" style="color:#f9a825"></i>
          TISC, UTC-Lira, Lira, Uganda
        </span>
        <div class="hidden items-center gap-5 sm:flex">
          <a href="tel:+256779512100" class="flex items-center gap-1.5 transition hover:text-white">
            <i class="fas fa-phone text-[10px]" style="color:#43a047"></i>
            +256 779 512 100
          </a>
          <a href="mailto:codetoinnovateafrica256@gmail.com" class="flex items-center gap-1.5 transition hover:text-white">
            <i class="fas fa-envelope text-[10px]" style="color:#1e88e5"></i>
            codetoinnovateafrica256@gmail.com
          </a>
        </div>
      </div>
    </div>

    <!-- Main nav -->
    <div class="border-b border-slate-100 bg-white/98" style="backdrop-filter:blur(16px)">
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-3">

          <!-- Logo -->
          <RouterLink to="/" class="flex items-center gap-2.5 group">
            <img :src="logoUrl" width="40" alt="CodeToInnovate Africa logo" class="rounded-lg ring-1 ring-slate-200 transition group-hover:ring-blue-300">
            <div class="leading-tight">
              <span class="block text-sm font-bold text-slate-900">CodeToInnovate Africa</span>
              <span class="block text-[10px] text-slate-400">Digital transformation &amp; inclusion</span>
            </div>
          </RouterLink>

          <!-- Desktop nav -->
          <nav class="hidden items-center gap-0.5 lg:flex">
            <RouterLink to="/" class="rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900" active-class="text-blue-600 bg-blue-50">Home</RouterLink>
            <RouterLink to="/about" class="rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900" active-class="text-blue-600 bg-blue-50">About</RouterLink>
            <RouterLink to="/why-us" class="rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900" active-class="text-blue-600 bg-blue-50">Why Us</RouterLink>

            <!-- Programs dropdown -->
            <div class="group relative">
              <button class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                Programs <i class="fas fa-chevron-down text-[9px] transition group-hover:rotate-180"></i>
              </button>
              <div class="invisible absolute left-0 top-full z-50 mt-1 w-52 origin-top scale-95 rounded-xl border border-slate-100 bg-white py-1.5 opacity-0 shadow-xl transition-all duration-150 group-hover:visible group-hover:scale-100 group-hover:opacity-100">
                <RouterLink to="/programming" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-code w-4 text-center text-xs" style="color:#1e88e5"></i> Learn Programming
                </RouterLink>
                <RouterLink to="/ict-training" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-laptop w-4 text-center text-xs" style="color:#43a047"></i> ICT Training
                </RouterLink>
                <RouterLink to="/women-in-tech" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-users w-4 text-center text-xs" style="color:#f9a825"></i> Women in Tech
                </RouterLink>
              </div>
            </div>

            <!-- Services dropdown -->
            <div class="group relative">
              <button class="flex items-center gap-1 rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900">
                Services <i class="fas fa-chevron-down text-[9px] transition group-hover:rotate-180"></i>
              </button>
              <div class="invisible absolute left-0 top-full z-50 mt-1 w-64 origin-top scale-95 rounded-xl border border-slate-100 bg-white py-1.5 opacity-0 shadow-xl transition-all duration-150 group-hover:visible group-hover:scale-100 group-hover:opacity-100">
                <RouterLink to="/softwares" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-code-branch w-4 text-center text-xs" style="color:#1e88e5"></i> Custom Software & Web Apps
                </RouterLink>
                <RouterLink to="/ehealth" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-heartbeat w-4 text-center text-xs" style="color:#43a047"></i> E-Health & E-Education
                </RouterLink>
                <RouterLink to="/digital-security" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-shield-alt w-4 text-center text-xs" style="color:#f9a825"></i> Digital Security & Infrastructure
                </RouterLink>
                <RouterLink to="/digital-skills" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-graduation-cap w-4 text-center text-xs" style="color:#1e88e5"></i> Digital Skills & Internships
                </RouterLink>
                <RouterLink to="/startup-incubator" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-rocket w-4 text-center text-xs" style="color:#43a047"></i> Startup Incubator & MVP
                </RouterLink>
                <RouterLink to="/green-tech" class="flex items-center gap-2 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
                  <i class="fas fa-leaf w-4 text-center text-xs" style="color:#f9a825"></i> Green Tech & Automation
                </RouterLink>
              </div>
            </div>

            <RouterLink to="/blogs" class="rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900" active-class="text-blue-600 bg-blue-50">Blog</RouterLink>
            <RouterLink to="/gallery" class="rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900" active-class="text-blue-600 bg-blue-50">Gallery</RouterLink>
            <RouterLink to="/partners" class="rounded-lg px-3 py-2 text-sm font-semibold text-slate-600 transition hover:bg-slate-100 hover:text-slate-900" active-class="text-blue-600 bg-blue-50">Partners</RouterLink>
          </nav>

          <!-- CTA -->
          <RouterLink to="/contact-us" class="hidden h-9 items-center justify-center rounded-full px-5 text-sm font-bold text-white shadow-md transition hover:-translate-y-0.5 hover:shadow-lg lg:inline-flex" style="background:#1e88e5">
            Work With Us
          </RouterLink>

          <!-- Mobile toggle -->
          <details class="relative lg:hidden">
            <summary class="list-none cursor-pointer rounded-xl border border-slate-200 p-2.5 text-slate-700 hover:bg-slate-50">
              <i class="fas fa-bars"></i>
            </summary>
            <div class="absolute right-0 top-full mt-2 w-72 rounded-2xl border border-slate-100 bg-white p-3 shadow-2xl">
              <RouterLink to="/" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50"><i class="fas fa-home w-4 text-xs text-slate-400"></i> Home</RouterLink>
              <RouterLink to="/about" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50"><i class="fas fa-info-circle w-4 text-xs text-slate-400"></i> About Us</RouterLink>
              <RouterLink to="/why-us" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50"><i class="fas fa-star w-4 text-xs text-slate-400"></i> Why Us</RouterLink>
              <div class="my-2 border-t border-slate-100"></div>
              <p class="px-3 pb-1 text-[10px] font-bold uppercase tracking-widest text-slate-400">Programs</p>
              <RouterLink to="/programming" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-code w-4 text-center text-xs" style="color:#1e88e5"></i> Learn Programming</RouterLink>
              <RouterLink to="/ict-training" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-laptop w-4 text-center text-xs" style="color:#43a047"></i> ICT Training</RouterLink>
              <RouterLink to="/women-in-tech" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-users w-4 text-center text-xs" style="color:#f9a825"></i> Women in Tech</RouterLink>
              <div class="my-2 border-t border-slate-100"></div>
              <p class="px-3 pb-1 text-[10px] font-bold uppercase tracking-widest text-slate-400">Services</p>
              <RouterLink to="/softwares" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-code-branch w-4 text-xs" style="color:#1e88e5"></i> Custom Software & Web Apps</RouterLink>
              <RouterLink to="/ehealth" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-heartbeat w-4 text-xs" style="color:#43a047"></i> E-Health & E-Education</RouterLink>
              <RouterLink to="/digital-security" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-shield-alt w-4 text-xs" style="color:#f9a825"></i> Digital Security</RouterLink>
              <RouterLink to="/digital-skills" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-graduation-cap w-4 text-xs" style="color:#1e88e5"></i> Digital Skills & Internships</RouterLink>
              <RouterLink to="/startup-incubator" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-rocket w-4 text-xs" style="color:#43a047"></i> Startup Incubator</RouterLink>
              <RouterLink to="/green-tech" class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-slate-700 hover:bg-slate-50"><i class="fas fa-leaf w-4 text-xs" style="color:#f9a825"></i> Green Tech & Automation</RouterLink>
              <RouterLink to="/blogs" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50"><i class="fas fa-newspaper w-4 text-xs text-slate-400"></i> Blog</RouterLink>
              <RouterLink to="/gallery" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50"><i class="fas fa-images w-4 text-xs text-slate-400"></i> Gallery</RouterLink>
              <RouterLink to="/partners" class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-50"><i class="fas fa-handshake w-4 text-xs text-slate-400"></i> Partners</RouterLink>
              <div class="mt-2 pt-2 border-t border-slate-100">
                <RouterLink to="/contact-us" class="c2i-btn-primary block w-full text-center">Work With Us</RouterLink>
              </div>
            </div>
          </details>
        </div>
      </div>
    </div>
  </header>
</template>

<script setup>
import { onMounted, onUnmounted, ref } from 'vue';
import { RouterLink } from 'vue-router';

const logoUrl = '/assets/images/logo.png';
const scrolled = ref(false);
const onScroll = () => { scrolled.value = window.scrollY > 30; };
onMounted(() => window.addEventListener('scroll', onScroll, { passive: true }));
onUnmounted(() => window.removeEventListener('scroll', onScroll));
</script>

