<template>
  <section class="pt-40 pb-20">
    <div class="container mx-auto max-w-4xl px-4">
      <div v-if="loading" class="rounded-2xl border border-slate-200 bg-white p-10 shadow-lg">
        <p class="text-slate-600">Loading article...</p>
      </div>

      <div v-else-if="error" class="rounded-2xl border border-rose-200 bg-rose-50 p-10 shadow-lg">
        <h1 class="text-2xl font-bold text-rose-900">Could not load article</h1>
        <p class="mt-3 text-rose-700">{{ error }}</p>
      </div>

      <article v-else class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-lg">
        <img :src="imageUrl(blog.blog_image)" :alt="blog.title" class="h-72 w-full object-cover md:h-96">
        <div class="p-8 md:p-10">
          <p class="text-xs font-semibold uppercase tracking-widest text-teal-700">{{ formatDate(blog.created_at) }}</p>
          <h1 class="mt-3 text-3xl font-bold text-slate-900 md:text-5xl">{{ blog.title }}</h1>
          <div class="prose mt-8 max-w-none text-slate-700" v-html="blog.content"></div>
          <RouterLink to="/blogs" class="mt-10 inline-flex h-11 items-center rounded-full bg-teal-700 px-6 font-semibold text-white hover:bg-teal-800">Back to Blogs</RouterLink>
        </div>
      </article>
    </div>
  </section>
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { useRoute, RouterLink } from 'vue-router';

const route = useRoute();
const blog = ref({ title: '', content: '', blog_image: '', created_at: '' });
const loading = ref(true);
const error = ref('');

const imageUrl = (path) => (path ? `/storage/${path}` : '/assets/images/soft.jpg');

const formatDate = (dateText) => {
  if (!dateText) return 'Recent';
  const d = new Date(dateText);
  return Number.isNaN(d.getTime()) ? 'Recent' : d.toLocaleDateString();
};

onMounted(async () => {
  try {
    const response = await fetch(`/api/blogs/${route.params.id}`);
    if (!response.ok) {
      const payload = await response.json().catch(() => ({}));
      throw new Error(payload.message || 'API request failed');
    }
    blog.value = await response.json();
  } catch (e) {
    error.value = e instanceof Error ? e.message : 'Please try again in a moment.';
  } finally {
    loading.value = false;
  }
});
</script>
