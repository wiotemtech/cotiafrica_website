<template>
  <section class="pt-32 pb-14 text-white" style="background:linear-gradient(120deg,#0d1b2a 0%,#155b58 56%,#1e3a5f 100%)">
    <div class="container mx-auto px-4">
      <p class="text-xs font-bold uppercase tracking-[0.2em] text-emerald-200">Meet, learn, and build together</p>
      <h1 class="mt-3 max-w-3xl text-4xl font-bold md:text-5xl">Events &amp; Community</h1>
      <p class="mt-4 max-w-2xl text-lg text-slate-200">Find upcoming workshops and events, register to join, or revisit highlights from past gatherings.</p>
    </div>
  </section>

  <section class="bg-slate-50 py-14">
    <div class="container mx-auto px-4">
      <div v-if="loading" class="border-y border-slate-200 py-12 text-center text-slate-600">Loading events...</div>
      <div v-else-if="error" class="border-y border-rose-200 bg-rose-50 px-6 py-10 text-center">
        <h2 class="text-xl font-bold text-rose-900">Events are temporarily unavailable</h2>
        <p class="mt-2 text-rose-700">{{ error }}</p>
      </div>
      <template v-else>
        <div class="mb-8 flex flex-wrap items-center justify-between gap-4 border-b border-slate-200">
          <div>
            <p class="text-xs font-bold uppercase tracking-[0.18em] text-emerald-800">Event calendar</p>
            <h2 class="mt-1 text-2xl font-bold text-slate-900">Find your next gathering</h2>
          </div>
          <div class="flex gap-2" role="tablist" aria-label="Event date range">
            <button type="button" role="tab" :aria-selected="activeTab === 'upcoming'" @click="activeTab = 'upcoming'" :class="tabClass('upcoming')">
              Upcoming <span class="ml-1 text-xs">{{ upcomingEvents.length }}</span>
            </button>
            <button type="button" role="tab" :aria-selected="activeTab === 'past'" @click="activeTab = 'past'" :class="tabClass('past')">
              Past <span class="ml-1 text-xs">{{ pastEvents.length }}</span>
            </button>
          </div>
        </div>

        <div v-if="visibleEvents.length" class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
          <article v-for="event in visibleEvents" :key="event.id" class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
            <img v-if="event.image" :src="imageUrl(event.image)" :alt="event.title" class="h-48 w-full object-cover" loading="lazy">
            <div class="p-5">
              <p class="text-xs font-bold uppercase tracking-wider text-emerald-800">{{ formatDate(event.event_date) }}</p>
              <h3 class="mt-2 text-xl font-bold text-slate-900">{{ event.title }}</h3>
              <p class="mt-2 text-sm font-semibold text-slate-700">{{ event.location }}<span v-if="event.start_time"> · {{ formatTime(event.start_time) }}</span></p>
              <p class="mt-3 whitespace-pre-line text-sm leading-relaxed text-slate-600">{{ event.description }}</p>
              <a v-if="isUpcoming && event.join_url" :href="event.join_url" target="_blank" rel="noopener noreferrer" class="mt-5 inline-flex items-center gap-2 rounded-md bg-emerald-800 px-4 py-2.5 text-sm font-bold text-white hover:bg-emerald-900">
                Register / Join <i class="fas fa-arrow-up-right-from-square text-xs" aria-hidden="true"></i>
              </a>
              <a v-else-if="!isUpcoming && event.recording_url" :href="event.recording_url" target="_blank" rel="noopener noreferrer" class="mt-5 inline-flex items-center gap-2 rounded-md border border-slate-300 px-4 py-2.5 text-sm font-bold text-slate-800 hover:bg-slate-50">
                View event recording <i class="fas fa-arrow-up-right-from-square text-xs" aria-hidden="true"></i>
              </a>
            </div>
          </article>
        </div>

        <div v-else class="border-y border-slate-200 py-14 text-center">
          <i class="fas fa-calendar-day text-3xl text-emerald-800" aria-hidden="true"></i>
          <h3 class="mt-4 text-xl font-bold text-slate-900">{{ activeTab === 'upcoming' ? 'No upcoming events yet' : 'No past events yet' }}</h3>
          <p class="mx-auto mt-2 max-w-lg text-slate-600">{{ activeTab === 'upcoming' ? 'Check back soon for new workshops and events.' : 'Past event highlights will appear here after events have taken place.' }}</p>
        </div>
      </template>
    </div>
  </section>
</template>

<script setup>
import { computed, onMounted, ref } from 'vue';

const events = ref([]);
const loading = ref(true);
const error = ref('');
const activeTab = ref('upcoming');

const today = () => {
  const date = new Date();
  date.setMinutes(date.getMinutes() - date.getTimezoneOffset());
  return date.toISOString().slice(0, 10);
};

const upcomingEvents = computed(() => events.value.filter((event) => String(event.event_date).slice(0, 10) >= today()));
const pastEvents = computed(() => events.value.filter((event) => String(event.event_date).slice(0, 10) < today()).reverse());
const visibleEvents = computed(() => activeTab.value === 'upcoming' ? upcomingEvents.value : pastEvents.value);
const isUpcoming = computed(() => activeTab.value === 'upcoming');

const tabClass = (tab) => activeTab.value === tab
  ? 'border-b-2 border-emerald-800 px-3 py-3 text-sm font-bold text-emerald-900'
  : 'border-b-2 border-transparent px-3 py-3 text-sm font-semibold text-slate-600 hover:text-slate-900';

const imageUrl = (path) => `/storage/${path}`;
const formatDate = (value) => new Date(`${String(value).slice(0, 10)}T00:00:00`).toLocaleDateString(undefined, { year: 'numeric', month: 'long', day: 'numeric' });
const formatTime = (value) => new Date(`2000-01-01T${value}`).toLocaleTimeString(undefined, { hour: 'numeric', minute: '2-digit' });

onMounted(async () => {
  try {
    const response = await fetch('/api/events');
    if (!response.ok) {
      const payload = await response.json().catch(() => ({}));
      throw new Error(payload.message || 'Please try again in a moment.');
    }
    events.value = await response.json();
  } catch (requestError) {
    error.value = requestError instanceof Error ? requestError.message : 'Please try again in a moment.';
  } finally {
    loading.value = false;
  }
});
</script>