<template>
  <!-- Hero -->
  <section class="relative overflow-hidden pt-36 text-white c2i-grid-glow md:pt-40" style="background:linear-gradient(135deg,#0d1b2a 0%,#12294d 55%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute left-0 top-0 h-[400px] w-[400px] -translate-x-1/3 -translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(30,136,229,0.22),transparent 70%)"></div>
    <div class="pointer-events-none absolute right-0 bottom-0 h-[300px] w-[300px] translate-x-1/4 translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(67,160,71,0.18),transparent 70%)"></div>

    <div class="container relative mx-auto px-4 pb-20 pt-8 text-center">
      <span class="c2i-chip"><i class="fas fa-comments text-[9px]"></i> Get in Touch</span>
      <h1 class="mx-auto mt-5 max-w-3xl text-4xl font-bold md:text-5xl">
        Let's Build Something<br class="hidden md:block"> Together
      </h1>
      <p class="mx-auto mt-5 max-w-2xl c2i-body-light">
        Need a custom system, training partnership, or just have a question? Our team in Lira is ready to help you move fast.
      </p>
    </div>
    <div class="w-full" style="height:3px;background:linear-gradient(90deg,#1e88e5 33%,#43a047 33% 66%,#f9a825 66%)"></div>
  </section>

  <section class="bg-white py-8">
    <div class="container mx-auto px-4">
      <div class="overflow-hidden rounded-[2rem] border border-slate-200 shadow-sm">
        <img :src="contactPhoto" alt="CodeToInnovate Africa contact and outreach activity" class="h-[320px] w-full object-cover" loading="eager" />
        <div class="bg-slate-900/80 px-4 py-3 text-sm text-white">
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" rel="noopener" class="inline-flex items-center gap-2 font-semibold">
            <i class="fas fa-play-circle"></i> Watch a short highlight
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact grid -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 gap-10 lg:grid-cols-5">

        <!-- Info sidebar (2 cols) -->
        <div class="space-y-5 lg:col-span-2">
          <div>
            <p class="c2i-section-label" style="color:#1e88e5">Contact Details</p>
            <h2 class="mt-2 text-2xl font-bold text-slate-900">Reach us directly</h2>
            <p class="mt-2 text-sm text-slate-500 leading-relaxed">We're based in Northern Uganda and work with partners across East Africa. Response time is typically within 24 hours.</p>
          </div>

          <div class="space-y-3">
            <a href="https://maps.google.com/?q=UTC-Lira" target="_blank" rel="noopener" class="c2i-card flex items-start gap-3 p-4 transition hover:-translate-y-0.5">
              <div class="mt-0.5 flex-shrink-0 inline-flex h-9 w-9 items-center justify-center rounded-xl" style="background:#1e88e515">
                <i class="fas fa-location-dot text-sm" style="color:#1e88e5"></i>
              </div>
              <div>
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Address</p>
                <p class="mt-0.5 text-sm font-semibold text-slate-800">TISC, Uganda Technical College – Lira</p>
                <p class="text-xs text-slate-500">P.O. Box 331626, Lira, Uganda</p>
              </div>
            </a>

            <a href="tel:+256779512100" class="c2i-card flex items-start gap-3 p-4 transition hover:-translate-y-0.5">
              <div class="mt-0.5 flex-shrink-0 inline-flex h-9 w-9 items-center justify-center rounded-xl" style="background:#43a04715">
                <i class="fas fa-phone text-sm" style="color:#43a047"></i>
              </div>
              <div>
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Phone</p>
                <p class="mt-0.5 text-sm font-semibold text-slate-800">+256 779 512 100</p>
                <p class="text-xs text-slate-500">+256 759 512 100</p>
              </div>
            </a>

            <a href="mailto:codetoinnovateafrica256@gmail.com" class="c2i-card flex items-start gap-3 p-4 transition hover:-translate-y-0.5">
              <div class="mt-0.5 flex-shrink-0 inline-flex h-9 w-9 items-center justify-center rounded-xl" style="background:#f9a82515">
                <i class="fas fa-envelope text-sm" style="color:#f9a825"></i>
              </div>
              <div>
                <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Email</p>
                <p class="mt-0.5 text-sm font-semibold text-slate-800 break-all">codetoinnovateafrica256@gmail.com</p>
              </div>
            </a>
          </div>

          <!-- Social links -->
          <div class="pt-2">
            <p class="text-xs font-bold uppercase tracking-widest text-slate-400">Follow us</p>
            <div class="mt-3 flex gap-2">
              <a href="https://linkedin.com/company/codetoinnovate-africa" target="_blank" rel="noopener" class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 text-slate-500 transition hover:border-blue-300 hover:text-blue-600" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in text-sm"></i>
              </a>
              <a href="https://x.com/CodeToInnovateA" target="_blank" rel="noopener" class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 text-slate-500 transition hover:border-slate-900 hover:text-slate-900" aria-label="X / Twitter">
                <i class="fab fa-x-twitter text-sm"></i>
              </a>
              <a href="https://tiktok.com/@code.to.innovate" target="_blank" rel="noopener" class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 text-slate-500 transition hover:border-slate-900 hover:text-slate-900" aria-label="TikTok">
                <i class="fab fa-tiktok text-sm"></i>
              </a>
              <a href="https://wa.me/256779512100" target="_blank" rel="noopener" class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 text-slate-500 transition hover:border-green-400 hover:text-green-500" aria-label="WhatsApp">
                <i class="fab fa-whatsapp text-sm"></i>
              </a>
              <a href="https://instagram.com/codetoinnovateafrica" target="_blank" rel="noopener" class="inline-flex h-9 w-9 items-center justify-center rounded-xl border border-slate-200 text-slate-500 transition hover:border-pink-400 hover:text-pink-500" aria-label="Instagram">
                <i class="fab fa-instagram text-sm"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Form (3 cols) -->
        <div class="lg:col-span-3">
          <!-- Success state -->
          <div v-if="submitted" class="flex flex-col items-center justify-center gap-4 rounded-2xl border border-green-200 bg-green-50 px-8 py-14 text-center">
            <div class="flex h-14 w-14 items-center justify-center rounded-full bg-green-100">
              <i class="fas fa-check text-xl text-green-600"></i>
            </div>
            <h3 class="text-xl font-bold text-slate-900">Message sent!</h3>
            <p class="text-sm text-slate-500">{{ successMessage }}</p>
            <button @click="resetForm" class="c2i-btn-primary mt-2">Send another message</button>
          </div>

          <!-- Form -->
          <form v-else @submit.prevent="submitForm" class="c2i-card space-y-5 p-8">
            <div>
              <p class="c2i-section-label mb-5" style="color:#1e88e5">Send a Message</p>
            </div>

            <!-- Server error banner -->
            <div v-if="serverError" class="flex items-start gap-3 rounded-xl border border-red-200 bg-red-50 px-4 py-3">
              <i class="fas fa-circle-exclamation mt-0.5 text-red-500"></i>
              <p class="text-sm text-red-700">{{ serverError }}</p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
              <div>
                <label class="mb-1.5 block text-xs font-bold uppercase tracking-widest text-slate-500">Full Name <span class="text-red-400">*</span></label>
                <input
                  v-model.trim="form.name"
                  type="text"
                  placeholder="e.g. Akello Grace"
                  :class="['w-full rounded-xl border px-4 py-3 text-sm outline-none transition focus:ring-2', errors.name ? 'border-red-400 focus:ring-red-200' : 'border-slate-200 bg-slate-50 focus:border-blue-400 focus:ring-blue-100']"
                />
                <p v-if="errors.name" class="mt-1 text-xs text-red-500">{{ errors.name[0] }}</p>
              </div>

              <div>
                <label class="mb-1.5 block text-xs font-bold uppercase tracking-widest text-slate-500">Email Address <span class="text-red-400">*</span></label>
                <input
                  v-model.trim="form.email"
                  type="email"
                  placeholder="you@example.com"
                  :class="['w-full rounded-xl border px-4 py-3 text-sm outline-none transition focus:ring-2', errors.email ? 'border-red-400 focus:ring-red-200' : 'border-slate-200 bg-slate-50 focus:border-blue-400 focus:ring-blue-100']"
                />
                <p v-if="errors.email" class="mt-1 text-xs text-red-500">{{ errors.email[0] }}</p>
              </div>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
              <div>
                <label class="mb-1.5 block text-xs font-bold uppercase tracking-widest text-slate-500">Phone (optional)</label>
                <input
                  v-model.trim="form.phone"
                  type="tel"
                  placeholder="+256 7XX XXX XXX"
                  class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-blue-400 focus:ring-2 focus:ring-blue-100"
                />
              </div>

              <div>
                <label class="mb-1.5 block text-xs font-bold uppercase tracking-widest text-slate-500">Subject</label>
                <select
                  v-model="form.subject"
                  class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm outline-none transition focus:border-blue-400 focus:ring-2 focus:ring-blue-100"
                >
                  <option value="">Select a topic…</option>
                  <option>Training / Enrollment</option>
                  <option>Custom Software</option>
                  <option>Partnership / Sponsorship</option>
                  <option>Women in Tech Program</option>
                  <option>General Enquiry</option>
                </select>
              </div>
            </div>

            <div>
              <label class="mb-1.5 block text-xs font-bold uppercase tracking-widest text-slate-500">Message <span class="text-red-400">*</span></label>
              <textarea
                v-model.trim="form.message"
                rows="5"
                placeholder="Tell us how we can help…"
                :class="['w-full rounded-xl border px-4 py-3 text-sm outline-none transition focus:ring-2', errors.message ? 'border-red-400 focus:ring-red-200' : 'border-slate-200 bg-slate-50 focus:border-blue-400 focus:ring-blue-100']"
              ></textarea>
              <p v-if="errors.message" class="mt-1 text-xs text-red-500">{{ errors.message[0] }}</p>
            </div>

            <button
              type="submit"
              :disabled="loading"
              class="c2i-btn-primary w-full justify-center gap-2 disabled:opacity-60"
            >
              <span v-if="loading"><i class="fas fa-spinner fa-spin"></i> Sending…</span>
              <span v-else>Send Message <i class="fas fa-paper-plane text-xs"></i></span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { reactive, ref } from 'vue';

const contactPhoto = `${import.meta.env.BASE_URL}assets/media/images/IMG_2113.jpg`;

const form = reactive({ name: '', email: '', phone: '', subject: '', message: '' });
const errors = ref({});
const serverError = ref('');
const loading = ref(false);
const submitted = ref(false);
const successMessage = ref('');

async function submitForm() {
  errors.value = {};
  serverError.value = '';
  loading.value = true;

  try {
    const res = await fetch('/api/contact', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
      body: JSON.stringify(form),
    });

    const data = await res.json();

    if (res.status === 422) {
      errors.value = data.errors ?? {};
    } else if (!res.ok) {
      serverError.value = data.message ?? 'Something went wrong. Please try again.';
    } else {
      successMessage.value = data.message;
      submitted.value = true;
    }
  } catch {
    serverError.value = 'Network error. Please check your connection and try again.';
  } finally {
    loading.value = false;
  }
}

function resetForm() {
  Object.assign(form, { name: '', email: '', phone: '', subject: '', message: '' });
  errors.value = {};
  serverError.value = '';
  submitted.value = false;
  successMessage.value = '';
}
</script>
