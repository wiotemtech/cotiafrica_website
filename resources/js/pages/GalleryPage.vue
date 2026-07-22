<template>
  <section class="pt-32 pb-20 bg-slate-50">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl">
        <p class="c2i-section-label" style="color:#1e88e5">Photo &amp; video gallery</p>
        <h1 class="mt-3 text-3xl font-bold text-slate-900 md:text-5xl">Moments from our programs, learners, and community impact</h1>
        <p class="mt-4 text-lg text-slate-600">These visuals highlight the training, collaboration, and innovation work happening across our ecosystem.</p>
      </div>

      <div class="mt-10 grid gap-6 lg:grid-cols-2">
        <article v-for="item in galleryItems" :key="item.fileName" class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
          <div v-if="item.type === 'image'" class="overflow-hidden">
            <img :src="mediaUrl(item.fileName, 'images')" :alt="item.title" class="h-72 w-full object-cover transition duration-300 hover:scale-105">
          </div>
          <div v-else class="bg-slate-900 p-3">
            <video controls preload="metadata" class="h-72 w-full rounded-2xl object-cover">
              <source :src="mediaUrl(item.fileName, 'videos')" :type="videoType(item.fileName)">
              Your browser does not support the video tag.
            </video>
          </div>
          <div class="p-5">
            <h2 class="text-lg font-bold text-slate-900">{{ item.title }}</h2>
            <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ item.description }}</p>
          </div>
        </article>
      </div>
    </div>
  </section>
</template>

<script setup>
const galleryItems = [
  {
    type: 'image',
    title: 'Hands-on training session',
    description: 'Learners building practical solutions with mentor support.',
    fileName: '1.jpeg',
  },
  {
    type: 'image',
    title: 'Community technology engagement',
    description: 'A collaborative moment during one of our outreach programs.',
    fileName: '2.jpeg',
  },
  {
    type: 'image',
    title: 'Innovation and learning environment',
    description: 'A learning space designed for experimentation and growth.',
    fileName: '4.jpeg',
  },
  {
    type: 'image',
    title: 'Program participants in action',
    description: 'Students and facilitators working together on shared goals.',
    fileName: 'IMG_2093.jpg',
  },
  {
    type: 'image',
    title: 'Interactive workshop moment',
    description: 'Facilitated sessions that connect theory to real practice.',
    fileName: 'IMG_2094.jpg',
  },
  {
    type: 'image',
    title: 'Team collaboration at the hub',
    description: 'A snapshot of our team supporting local innovation efforts.',
    fileName: 'IMG_2098.jpg',
  },
  {
    type: 'image',
    title: 'Training and mentorship in progress',
    description: 'Mentorship sessions that build confidence and capability.',
    fileName: 'IMG_2099.jpg',
  },
  {
    type: 'image',
    title: 'Community-focused delivery',
    description: 'A visible example of our work in local settings.',
    fileName: 'IMG_2101 (1).jpg',
  },
  {
    type: 'image',
    title: 'Practical learning environment',
    description: 'Programs shaped around hands-on learning and real outcomes.',
    fileName: 'IMG_2102.jpg',
  },
  {
    type: 'image',
    title: 'Digital skills showcase',
    description: 'A closer look at our learners turning ideas into action.',
    fileName: 'IMG_2106.jpg',
  },
  {
    type: 'image',
    title: 'Innovation support in action',
    description: 'A moment that reflects the energy of our network.',
    fileName: 'IMG_2107 (1).jpg',
  },
  {
    type: 'image',
    title: 'Partner and learner engagement',
    description: 'A blend of collaboration, support, and shared ambition.',
    fileName: 'IMG_2111 (1).jpg',
  },
  {
    type: 'image',
    title: 'Community-centered project work',
    description: 'An image from one of our impactful engagement sessions.',
    fileName: 'IMG_2113.jpg',
  },
  {
    type: 'image',
    title: 'Program milestone photograph',
    description: 'A memorable capture from our wider initiatives.',
    fileName: 'IMG_2120.jpg',
  },
  {
    type: 'image',
    title: 'Activity highlight',
    description: 'A moment that reflects the momentum of the work.',
    fileName: 'IMG_2122.jpg',
  },
  {
    type: 'image',
    title: 'Learning and collaboration',
    description: 'The environment behind many of our successful projects.',
    fileName: 'IMG_2123 (1).jpg',
  },
  {
    type: 'image',
    title: 'Project showcase',
    description: 'A visual narrative of our work in the field and at the hub.',
    fileName: 'IMG_2124 (1).jpg',
  },
  {
    type: 'image',
    title: 'Special event moment',
    description: 'A snapshot of creativity and community participation.',
    fileName: 'IMG_2124.jpg',
  },
  {
    type: 'image',
    title: 'Hub presence and outreach',
    description: 'A portrait of our work reaching broader communities.',
    fileName: 'pho.jpeg',
  },
  {
    type: 'video',
    title: 'Program highlight video',
    description: 'A short clip showcasing the energy of our activities.',
    fileName: '3.mp4',
  },
  {
    type: 'video',
    title: 'Another community video',
    description: 'A second video clip to highlight our broader impact.',
    fileName: '5v.mp4',
  },
];

const mediaUrl = (fileName, folder) => `/assets/media/${folder}/${encodeURIComponent(fileName)}`;

const videoType = (fileName) => {
  if (fileName.toLowerCase().endsWith('.mp4')) return 'video/mp4';
  if (fileName.toLowerCase().endsWith('.webm')) return 'video/webm';
  return 'video/mp4';
};
</script>
