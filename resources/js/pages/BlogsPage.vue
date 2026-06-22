<template>
  <section class="relative overflow-hidden bg-gradient-to-br from-slate-950 via-slate-900 to-teal-900 pt-40 pb-14 text-white">
    <div class="container mx-auto px-4 text-center">
      <div class="mb-4 inline-block rounded-full border border-teal-300/40 bg-teal-300/10 px-4 py-2 text-xs font-bold uppercase tracking-[0.2em] text-teal-100">Insights</div>
      <h1 class="mb-4 text-5xl font-bold md:text-6xl">Ideas, Field Notes, and Digital Strategy</h1>
      <p class="mx-auto max-w-3xl text-xl text-slate-200">Practical stories on innovation delivery, software systems, and inclusion outcomes across East Africa.</p>
    </div>
  </section>

  <section class="bg-slate-50 py-20">
    <div class="container mx-auto px-4">
      <div v-if="loading" class="rounded-2xl border border-slate-200 bg-white p-10 text-center shadow-lg">
        <p class="text-slate-600">Loading articles...</p>
      </div>

      <div v-else-if="error" class="rounded-2xl border border-rose-200 bg-rose-50 p-10 text-center shadow-lg">
        <h2 class="text-2xl font-bold text-rose-900">Could not load blog posts</h2>
        <p class="mt-3 text-rose-700">{{ error }}</p>
      </div>

      <div v-else-if="blogs.length === 0" class="rounded-2xl border border-slate-200 bg-white p-10 text-center shadow-lg">
        <h2 class="text-2xl font-bold text-slate-900">No blog posts yet</h2>
        <p class="mt-3 text-slate-600">Your admin team can publish posts from the dashboard.</p>
      </div>

      <div v-else class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <article v-for="blog in blogs" :key="blog.id" class="group overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg transition hover:-translate-y-1 hover:shadow-xl">
          <img :src="imageUrl(blog.blog_image)" :alt="blog.title" class="h-52 w-full object-cover">
          <div class="p-6">
            <p class="text-xs font-semibold uppercase tracking-widest text-teal-700">{{ formatDate(blog.created_at) }}</p>
            <h3 class="mt-2 line-clamp-2 text-xl font-bold text-slate-900">{{ blog.title }}</h3>
            <p class="mt-3 line-clamp-3 text-sm text-slate-600">{{ blog.excerpt }}</p>
            <RouterLink :to="`/blogs/${blog.id}/${slugify(blog.title)}`" class="mt-5 inline-flex items-center text-sm font-bold text-teal-700">
              Read article
              <i class="fas fa-arrow-right ml-2"></i>
            </RouterLink>
          </div>
        </article>
      </div>
    </div>
  </section>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { RouterLink } from 'vue-router';

const blogs = ref([]);
const loading = ref(true);
const error = ref('');

const slugify = (text) =>
  String(text || '')
    .toLowerCase()
    .trim()
    .replace(/[^a-z0-9\s-]/g, '')
    .replace(/\s+/g, '-')
    .replace(/-+/g, '-');

const imageUrl = (path) => (path ? `/storage/${path}` : '/assets/images/soft.jpg');

const formatDate = (dateText) => {
  if (!dateText) return 'Recent';
  const d = new Date(dateText);
  return Number.isNaN(d.getTime()) ? 'Recent' : d.toLocaleDateString();
};

onMounted(async () => {
  try {
    const response = await fetch('/api/blogs');
    if (!response.ok) {
      const payload = await response.json().catch(() => ({}));
      throw new Error(payload.message || 'API request failed');
    }
    blogs.value = await response.json();
  } catch (e) {
    error.value = e instanceof Error ? e.message : 'Please try again in a moment.';
  } finally {
    loading.value = false;
  }
});
</script>
