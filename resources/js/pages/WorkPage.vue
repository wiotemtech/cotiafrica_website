<template>
  <section class="pt-32 pb-16 text-white" style="background:linear-gradient(120deg,#0d1b2a 0%,#155b58 56%,#1e3a5f 100%)">
    <div class="container mx-auto px-4">
      <p class="text-xs font-bold uppercase tracking-[0.2em] text-emerald-200">Projects &amp; contracts</p>
      <h1 class="mt-3 max-w-3xl text-4xl font-bold md:text-5xl">Work built with our clients</h1>
      <p class="mt-4 max-w-2xl text-lg text-slate-200">Explore selected projects, active engagements, and partnerships delivered with organizations across our community.</p>
    </div>
  </section>

  <section class="bg-slate-50 py-14">
    <div class="container mx-auto px-4">
      <div v-if="loading" class="border-y border-slate-200 py-12 text-center text-slate-600">Loading published work...</div>
      <div v-else-if="error" class="border-y border-rose-200 bg-rose-50 px-6 py-10 text-center">
        <h2 class="text-xl font-bold text-rose-900">Work portfolio is temporarily unavailable</h2>
        <p class="mt-2 text-rose-700">{{ error }}</p>
      </div>
      <div v-else-if="works.length === 0" class="border-y border-slate-200 py-14 text-center">
        <i class="fas fa-folder-open text-3xl text-emerald-700" aria-hidden="true"></i>
        <h2 class="mt-4 text-2xl font-bold text-slate-900">New work will appear here</h2>
        <p class="mx-auto mt-2 max-w-xl text-slate-600">We are preparing approved project and contract highlights to share with you.</p>
      </div>
      <div v-else class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <article v-for="work in works" :key="work.id" class="overflow-hidden border border-slate-200 bg-white shadow-sm">
          <img v-if="work.image" :src="imageUrl(work.image)" :alt="work.title" class="h-52 w-full object-cover" loading="lazy">
          <div class="p-5">
            <div class="flex flex-wrap items-center justify-between gap-2">
              <span class="text-xs font-bold uppercase tracking-wider text-emerald-800">{{ work.type }}</span>
              <span class="text-xs font-semibold text-slate-500">{{ work.status }}</span>
            </div>
            <h2 class="mt-3 text-xl font-bold text-slate-900">{{ work.title }}</h2>
            <p class="mt-1 text-sm font-semibold text-slate-600">{{ work.client_name }}</p>
            <p class="mt-3 text-sm leading-relaxed text-slate-600">{{ work.description }}</p>
            <a v-if="work.public_url" :href="work.public_url" target="_blank" rel="noopener noreferrer" class="mt-5 inline-flex items-center gap-2 text-sm font-bold text-emerald-800 hover:text-emerald-900">
              View public project <i class="fas fa-arrow-up-right-from-square text-xs" aria-hidden="true"></i>
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted, ref } from 'vue';

const works = ref([]);
const loading = ref(true);
const error = ref('');

const imageUrl = (path) => `/storage/${path}`;

onMounted(async () => {
  try {
    const response = await fetch('/api/works');
    if (!response.ok) {
      const payload = await response.json().catch(() => ({}));
      throw new Error(payload.message || 'Please try again in a moment.');
    }
    works.value = await response.json();
  } catch (requestError) {
    error.value = requestError instanceof Error ? requestError.message : 'Please try again in a moment.';
  } finally {
    loading.value = false;
  }
});
</script>