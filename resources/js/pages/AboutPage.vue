<template>
  <!-- Hero -->
  <section class="relative overflow-hidden pt-36 text-white c2i-grid-glow md:pt-40" style="background:linear-gradient(135deg,#0d1b2a 0%,#12294d 55%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute left-0 top-0 h-[500px] w-[500px] -translate-x-1/3 -translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(30,136,229,0.25),transparent 70%)"></div>
    <div class="pointer-events-none absolute right-0 bottom-0 h-[400px] w-[400px] translate-x-1/4 translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(67,160,71,0.2),transparent 70%)"></div>

    <div class="container relative mx-auto px-4 pb-20 pt-8 text-center">
      <span class="c2i-chip"><i class="fas fa-building text-[9px]"></i> About CodeToInnovate Africa</span>
      <h1 class="mx-auto mt-5 max-w-4xl text-4xl font-bold md:text-[3.2rem]">
        Bridging the Education–Industry Gap<br class="hidden md:block"> Across Uganda
      </h1>
      <p class="mx-auto mt-5 max-w-2xl text-base c2i-body-light">
        A premier technology innovation hub and enterprise software engineering firm headquartered at UTC-Lira — empowering African youth with marketplace-ready digital skills and secure, compliant digital systems.
      </p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <RouterLink to="/contact-us" class="c2i-btn-primary gap-2">Work with us <i class="fas fa-arrow-right text-xs"></i></RouterLink>
        <RouterLink to="/ict-training" class="c2i-btn-ghost">Start Learning</RouterLink>
      </div>
    </div>

    <div class="w-full" style="height:3px;background:linear-gradient(90deg,#1e88e5 33%,#43a047 33% 66%,#f9a825 66%)"></div>
  </section>

  <!-- Who We Are -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 items-start gap-12 lg:grid-cols-2">
        <div>
          <p class="c2i-section-label" style="color:#1e88e5">Who We Are</p>
          <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">More than a training centre. A full-cycle innovation partner.</h2>
          <p class="mt-5 text-slate-500 leading-relaxed">
            CodeToInnovate Africa is a premier technology innovation hub and enterprise software engineering firm headquartered at the Uganda Technical College – Lira (UTC-Lira), in Northern Uganda.
          </p>
          <p class="mt-4 text-slate-500 leading-relaxed">
            We bridge the education–industry gap by offering structured digital skills programs, building compliant e-services, and equipping the next generation of African innovators with the technical and entrepreneurial skills they need to compete globally.
          </p>
          <p class="mt-4 text-slate-500 leading-relaxed">
            Every product we build and every course we deliver is designed to solve real local challenges — working within the realities of Ugandan institutions, SMEs, and underserved communities.
          </p>
          <RouterLink to="/contact-us" class="c2i-btn-primary mt-7 self-start gap-2">
            Work with us <i class="fas fa-arrow-right text-xs"></i>
          </RouterLink>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
          <div v-for="fact in keyFacts" :key="fact.label" class="c2i-card p-5">
            <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl" :style="`background:${fact.color}15`">
              <i :class="fact.icon" :style="`color:${fact.color}`"></i>
            </div>
            <p class="text-[10px] font-bold uppercase tracking-widest" :style="`color:${fact.color}`">{{ fact.label }}</p>
            <p class="mt-1 text-sm font-semibold text-slate-800">{{ fact.value }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Vision & Mission -->
  <section class="py-20" style="background:#f5f8fb">
    <div class="container mx-auto px-4">
      <div class="mb-10 text-center">
        <p class="text-xs font-bold uppercase tracking-[0.2em]" style="color:#1e88e5">Our Direction</p>
        <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">Vision & Mission</h2>
      </div>

      <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
        <div class="relative overflow-hidden rounded-3xl p-8 text-white shadow-xl" style="background:linear-gradient(135deg,#1e88e5,#1565c0)">
          <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full opacity-20" style="background:white"></div>
          <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-white/20">
            <i class="fas fa-eye text-xl text-white"></i>
          </div>
          <p class="text-xs font-bold uppercase tracking-[0.2em] text-blue-200">Vision</p>
          <h3 class="mt-3 text-2xl font-bold">Africa's Leading Catalyst for Inclusive Digital Transformation</h3>
          <p class="mt-4 text-blue-50 leading-relaxed">
            To be Africa's leading catalyst for inclusive digital transformation, creating a new generation of ecosystem innovators and tech entrepreneurs who reshape the continent's economic future.
          </p>
        </div>

        <div class="relative overflow-hidden rounded-3xl p-8 text-white shadow-xl" style="background:linear-gradient(135deg,#43a047,#2e7d32)">
          <div class="pointer-events-none absolute -right-10 -top-10 h-40 w-40 rounded-full opacity-20" style="background:white"></div>
          <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-white/20">
            <i class="fas fa-rocket text-xl text-white"></i>
          </div>
          <p class="text-xs font-bold uppercase tracking-[0.2em] text-green-200">Mission</p>
          <h3 class="mt-3 text-2xl font-bold">Accelerate Digital Literacy. Deploy Compliant Systems.</h3>
          <p class="mt-4 text-green-50 leading-relaxed">
            To accelerate local digital literacy and deploy secure, data-compliant software systems that drive public and private sector growth across Uganda and East Africa.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Operating Principles -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4">
      <div class="mb-12 text-center">
        <p class="c2i-section-label" style="color:#f9a825">How We Operate</p>
        <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">Operating Principles</h2>
        <p class="mx-auto mt-3 max-w-2xl text-slate-500">Four pillars that guide every program, product, and partnership we undertake.</p>
      </div>

      <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <div v-for="principle in principles" :key="principle.title" class="c2i-card p-6">
          <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl" :style="`background:${principle.color}15`">
            <i :class="principle.icon" class="text-xl" :style="`color:${principle.color}`"></i>
          </div>
          <h3 class="text-lg font-bold text-slate-900">{{ principle.title }}</h3>
          <p class="mt-2 text-sm text-slate-500 leading-relaxed">{{ principle.text }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Impact Numbers -->
  <section class="py-20 text-white" style="background:linear-gradient(135deg,#0d1b2a 0%,#12294d 60%,#0d2b1f 100%)">
    <div class="container mx-auto px-4 text-center">
      <p class="c2i-section-label" style="color:#f9a825">Our Impact So Far</p>
      <h2 class="mt-4 text-3xl font-bold md:text-4xl">Numbers that reflect real change</h2>
      <div class="mt-10 grid grid-cols-2 gap-5 md:grid-cols-4">
        <div v-for="stat in stats" :key="stat.label" class="rounded-2xl p-6 text-center transition hover:-translate-y-1" style="background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.1)">
          <p class="text-4xl font-extrabold text-white">{{ stat.value }}</p>
          <p class="mt-2 text-sm font-semibold" :style="`color:${stat.color}`">{{ stat.label }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Values -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4">
      <div class="mb-10 text-center">
        <p class="c2i-section-label" style="color:#43a047">What We Stand For</p>
        <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">Our Core Values</h2>
      </div>
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <div v-for="value in values" :key="value.title" class="c2i-card flex items-start gap-4 p-5">
          <div class="mt-0.5 flex-shrink-0 inline-flex h-9 w-9 items-center justify-center rounded-xl" :style="`background:${value.color}15`">
            <i :class="value.icon" class="text-sm" :style="`color:${value.color}`"></i>
          </div>
          <div>
            <h3 class="font-bold text-slate-900">{{ value.title }}</h3>
            <p class="mt-1 text-sm text-slate-500 leading-relaxed">{{ value.text }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative overflow-hidden py-20 text-white" style="background:linear-gradient(135deg,#12294d 0%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute inset-0" style="background:radial-gradient(ellipse at 50% 0%,rgba(30,136,229,0.18),transparent 65%)"></div>
    <div class="container relative mx-auto px-4 text-center">
      <p class="c2i-section-label" style="color:#f9a825">Join our journey</p>
      <h2 class="mt-4 text-3xl font-bold md:text-5xl">Be part of a transformation that starts in Lira.</h2>
      <p class="mx-auto mt-4 max-w-2xl c2i-body-light">Whether you want to learn, partner, or build — we have a pathway designed for you.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <RouterLink to="/ict-training" class="c2i-btn-primary gap-2">Start Learning <i class="fas fa-arrow-right text-xs"></i></RouterLink>
        <RouterLink to="/contact-us" class="c2i-btn-ghost">Contact Us</RouterLink>
      </div>
    </div>
  </section>
</template>

<script setup>
import { RouterLink } from 'vue-router';

const keyFacts = [
  { label: 'Headquarters', value: 'UTC-Lira, Northern Uganda', icon: 'fas fa-map-marker-alt', color: '#1e88e5' },
  { label: 'Founded', value: 'Serving communities since 2020', icon: 'fas fa-calendar-alt', color: '#43a047' },
  { label: 'Impact Goal', value: '1 Million lives by 2035', icon: 'fas fa-bullseye', color: '#f9a825' },
  { label: 'Compliance', value: "Uganda's Data Protection & Privacy Act 2019", icon: 'fas fa-shield-alt', color: '#1e88e5' },
];

const principles = [
  {
    title: 'Train',
    text: 'We deliver practical, market-aligned digital skills to learners, professionals, and institutions.',
    icon: 'fas fa-graduation-cap',
    color: '#1e88e5',
  },
  {
    title: 'Build',
    text: 'We engineer compliant, scalable software systems that solve genuine operational challenges.',
    icon: 'fas fa-code',
    color: '#43a047',
  },
  {
    title: 'Mentor',
    text: 'We provide structured mentorship that turns technical skill into career and entrepreneurial outcomes.',
    icon: 'fas fa-users',
    color: '#f9a825',
  },
  {
    title: 'Support',
    text: 'We provide sustained implementation support so that digital systems remain effective over time.',
    icon: 'fas fa-hands-helping',
    color: '#1e88e5',
  },
];

const stats = [
  { value: '300+', label: 'Learners Trained', color: '#93c5fd' },
  { value: '10+', label: 'Systems Delivered', color: '#86efac' },
  { value: '5+', label: 'Partner Organisations', color: '#fde68a' },
  { value: '1M', label: 'Impact Goal by 2035', color: '#f9a825' },
];

const values = [
  { title: 'Inclusion First', text: 'Every program is designed to reach learners and communities that are typically left out of the digital economy.', icon: 'fas fa-heart', color: '#1e88e5' },
  { title: 'Practical Outcomes', text: "We measure success by real-world results — jobs secured, systems deployed, institutions transformed.", icon: 'fas fa-chart-line', color: '#43a047' },
  { title: 'Compliance & Trust', text: 'All systems are built to meet Uganda\'s data protection laws and international best practices.', icon: 'fas fa-shield-alt', color: '#f9a825' },
  { title: 'Local Relevance', text: 'Solutions are designed around the real constraints and priorities of Northern Uganda and the region.', icon: 'fas fa-map-marker-alt', color: '#1e88e5' },
  { title: 'Continuous Learning', text: 'We invest in our own team and learners to stay current with global technology trends.', icon: 'fas fa-book-open', color: '#43a047' },
  { title: 'Collaborative Growth', text: 'We grow through partnerships — with schools, NGOs, government agencies, and private sector actors.', icon: 'fas fa-handshake', color: '#f9a825' },
];
</script>
