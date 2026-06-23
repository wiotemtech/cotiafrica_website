<template>
  <footer class="relative overflow-hidden bg-slate-950 text-white">
    <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(45,212,191,0.15),transparent_40%)]"></div>
    <div class="container relative mx-auto px-4 py-16">
      <div class="mb-12 grid grid-cols-1 gap-8 border-b border-slate-800 pb-12 sm:grid-cols-2 lg:grid-cols-5">
        <div class="lg:col-span-2">
          <img :src="logoUrl" alt="CodeToInnovate Africa logo" class="mb-4 h-16 w-16 rounded-xl border border-slate-800 bg-slate-900 p-1.5 object-contain">
          <h5 class="mb-2 text-base font-bold text-white">CodeToInnovate Africa</h5>
          <p class="text-sm leading-relaxed text-slate-300">A technology innovation hub building inclusive, compliant digital systems from Northern Uganda.</p>

          <div class="mt-5 flex gap-3">
            <a href="https://x.com/CodeToInnovateA" target="_blank" rel="noopener" aria-label="X (Twitter)" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-700 text-slate-400 transition hover:border-teal-400 hover:text-teal-300">
              <i class="fab fa-x-twitter text-sm"></i>
            </a>
            <a href="https://linkedin.com/company/codetoinnovate-africa" target="_blank" rel="noopener" aria-label="LinkedIn" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-700 text-slate-400 transition hover:border-teal-400 hover:text-teal-300">
              <i class="fab fa-linkedin-in text-sm"></i>
            </a>
            <a href="https://tiktok.com/@code.to.innovate" target="_blank" rel="noopener" aria-label="TikTok" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-700 text-slate-400 transition hover:border-teal-400 hover:text-teal-300">
              <i class="fab fa-tiktok text-sm"></i>
            </a>
            <a href="https://wa.me/256779512100" target="_blank" rel="noopener" aria-label="WhatsApp" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-700 text-slate-400 transition hover:border-teal-400 hover:text-teal-300">
              <i class="fab fa-whatsapp text-sm"></i>
            </a>
            <a href="https://instagram.com/codetoinnovateafrica" target="_blank" rel="noopener" aria-label="Instagram" class="flex h-9 w-9 items-center justify-center rounded-full border border-slate-700 text-slate-400 transition hover:border-teal-400 hover:text-teal-300">
              <i class="fab fa-instagram text-sm"></i>
            </a>
          </div>
        </div>

        <div>
          <h5 class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-teal-300">Programs</h5>
          <ul class="space-y-2.5 text-sm">
            <li><RouterLink to="/about" class="text-slate-300 transition hover:text-white">About Us</RouterLink></li>
            <li><RouterLink to="/programming" class="text-slate-300 transition hover:text-white">Learn Programming</RouterLink></li>
            <li><RouterLink to="/ict-training" class="text-slate-300 transition hover:text-white">ICT Training</RouterLink></li>
            <li><RouterLink to="/women-in-tech" class="text-slate-300 transition hover:text-white">Women in Tech</RouterLink></li>
            <li><RouterLink to="/why-us" class="text-slate-300 transition hover:text-white">Why Us</RouterLink></li>
            <li><RouterLink to="/blogs" class="text-slate-300 transition hover:text-white">Blog</RouterLink></li>
          </ul>
        </div>

        <div>
          <h5 class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-teal-300">Services</h5>
          <ul class="space-y-2.5 text-sm">
            <li><RouterLink to="/softwares" class="text-slate-300 transition hover:text-white">Custom Software & Web Apps</RouterLink></li>
            <li><RouterLink to="/ehealth" class="text-slate-300 transition hover:text-white">E-Health & E-Education</RouterLink></li>
            <li><RouterLink to="/digital-security" class="text-slate-300 transition hover:text-white">Digital Security</RouterLink></li>
            <li><RouterLink to="/digital-skills" class="text-slate-300 transition hover:text-white">Digital Skills & Internships</RouterLink></li>
            <li><RouterLink to="/startup-incubator" class="text-slate-300 transition hover:text-white">Startup Incubator</RouterLink></li>
            <li><RouterLink to="/green-tech" class="text-slate-300 transition hover:text-white">Green Tech & Automation</RouterLink></li>
          </ul>
        </div>

        <div>
          <h5 class="mb-4 text-xs font-bold uppercase tracking-[0.2em] text-teal-300">Contact</h5>
          <ul class="space-y-3 text-sm">
            <li class="flex items-start gap-2"><i class="fas fa-envelope mt-1 flex-shrink-0 text-teal-400"></i><a href="mailto:codetoinnovateafrica256@gmail.com" class="break-all text-slate-300 transition hover:text-white">codetoinnovateafrica256@gmail.com</a></li>
            <li class="flex items-start gap-2"><i class="fas fa-phone mt-1 flex-shrink-0 text-teal-400"></i><span class="text-slate-300">+256 779 512 100<br>+256 759 512 100</span></li>
            <li class="flex items-start gap-2"><i class="fas fa-map-marker-alt mt-1 flex-shrink-0 text-teal-400"></i><span class="text-slate-300">TISC, UTC-Lira, P.O. Box 331626, Lira, Uganda</span></li>
          </ul>
          <p class="mt-4 text-xs text-slate-500">Systems aligned with Uganda's Data Protection and Privacy Act (2019).</p>
        </div>
      </div>

      <div class="flex flex-col items-center justify-between gap-3 text-sm text-slate-500 sm:flex-row">
        <p>&copy; {{ year }} CodeToInnovate Africa. All Rights Reserved.</p>
        <RouterLink to="/contact-us" class="text-slate-400 hover:text-teal-300">Work with us →</RouterLink>
      </div>
    </div>
  </footer>
</template>

<script setup>
import { computed } from 'vue';
import { RouterLink } from 'vue-router';

const year = computed(() => new Date().getFullYear());
const logoUrl = '/assets/images/logo.png';
</script>
