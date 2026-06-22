<template>
  <!-- â”€â”€ Hero â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
  <section class="relative overflow-hidden pt-36 text-white c2i-grid-glow md:pt-40" style="background:linear-gradient(135deg,#0d1b2a 0%,#12294d 55%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute left-0 top-0 h-[500px] w-[500px] -translate-x-1/3 -translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(30,136,229,0.28),transparent 70%)"></div>
    <div class="pointer-events-none absolute right-0 bottom-0 h-[400px] w-[400px] translate-x-1/4 translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(67,160,71,0.22),transparent 70%)"></div>

    <div class="container relative mx-auto grid grid-cols-1 items-center gap-12 px-4 pb-20 pt-8 lg:grid-cols-2">
      <!-- Left copy -->
      <div>
        <span class="c2i-chip"><i class="fas fa-microchip text-[9px]"></i> Technology Innovation Hub</span>
        <h1 class="mt-5 text-4xl font-bold leading-[1.1] md:text-[3.5rem]">
          Learn digital skills.<br>
          <span style="color:#43a047">Build real systems.</span><br>
          <span style="color:#1e88e5">Create lasting impact.</span>
        </h1>
        <p class="mt-5 max-w-lg text-base c2i-body-light">
          CodeToInnovate Africa equips learners, teams, and institutions across Uganda with practical software skills, product delivery support, and compliance-aware implementation.
        </p>

        <div class="mt-7 flex flex-wrap gap-3">
          <RouterLink to="/ict-training" class="c2i-btn-primary gap-2">
            Start Learning <i class="fas fa-arrow-right text-xs"></i>
          </RouterLink>
          <RouterLink to="/softwares" class="c2i-btn-ghost">
            Explore Services
          </RouterLink>
        </div>

        <!-- Stats -->
        <div class="mt-8 grid grid-cols-3 gap-3">
          <div v-for="stat in heroStats" :key="stat.label" class="rounded-xl border p-4 text-center" style="border-color:rgba(255,255,255,0.14);background:rgba(255,255,255,0.07)">
            <p class="text-2xl font-extrabold text-white md:text-3xl">{{ stat.value }}</p>
            <p class="mt-1 text-[11px] font-semibold" :style="`color:${stat.color}`">{{ stat.label }}</p>
          </div>
        </div>
      </div>

      <!-- Right image -->
      <div class="relative hidden lg:block">
        <img :src="heroImage" alt="CodeToInnovate team and learners" class="h-[460px] w-full rounded-2xl object-cover shadow-2xl ring-1 ring-white/10">
        <!-- Floating badge -->
        <div class="absolute -bottom-4 left-6 rounded-xl px-4 py-3 shadow-2xl" style="background:rgba(13,27,42,0.92);backdrop-filter:blur(14px);border:1px solid rgba(255,255,255,0.12)">
          <p class="text-[10px] font-bold uppercase tracking-widest" style="color:#f9a825">Operating Principle</p>
          <p class="mt-0.5 text-sm font-semibold text-white">Train Â· Build Â· Mentor Â· Support</p>
        </div>
        <!-- Green pill -->
        <div class="absolute -top-3 right-6 rounded-full px-3 py-1.5 text-[11px] font-bold text-white shadow-lg" style="background:#43a047">
          âœ“ Compliance-first
        </div>
      </div>
    </div>

    <!-- Brand stripe -->
    <div class="w-full" style="height:3px;background:linear-gradient(90deg,#1e88e5 33%,#43a047 33% 66%,#f9a825 66%)"></div>
  </section>

  <!-- â”€â”€ Trust strip â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
  <section class="bg-white py-8">
    <div class="container mx-auto px-4">
      <p class="mb-5 text-center text-[11px] font-bold uppercase tracking-[0.2em] text-slate-400">Trusted across education, SMEs &amp; community programs</p>
      <div class="flex flex-wrap items-center justify-center gap-3">
        <span v-for="partner in partnerTypes" :key="partner" class="rounded-full border border-slate-200 bg-slate-50 px-4 py-1.5 text-sm font-semibold text-slate-600 transition hover:border-blue-300 hover:text-blue-600">
          {{ partner }}
        </span>
      </div>
    </div>
  </section>

  <!-- â”€â”€ Pathways â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
  <section class="py-20" style="background:#f0f4f8">
    <div class="container mx-auto px-4">
      <div class="mb-12 text-center">
        <p class="c2i-section-label" style="color:#1e88e5">Choose your pathway</p>
        <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-5xl">A path for every goal</h2>
        <p class="mx-auto mt-3 max-w-2xl text-slate-500">Built for students, professionals, and institutions that need practical outcomes â€” not just certificates.</p>
      </div>

      <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
        <article v-for="path in pathways" :key="path.name" class="c2i-card overflow-hidden">
          <!-- Coloured top band -->
          <div class="relative px-6 py-6" :style="`background:${path.bg}`">
            <div class="inline-flex h-11 w-11 items-center justify-center rounded-xl" style="background:rgba(255,255,255,0.22)">
              <i :class="path.icon" class="text-lg text-white"></i>
            </div>
            <span class="mt-4 block text-[10px] font-bold uppercase tracking-[0.2em] text-white/60">{{ path.badge }}</span>
            <h3 class="mt-1 text-xl font-bold text-white">{{ path.name }}</h3>
            <!-- Decorative circle -->
            <div class="pointer-events-none absolute -right-8 -top-8 h-28 w-28 rounded-full" style="background:rgba(255,255,255,0.07)"></div>
          </div>

          <div class="p-6">
            <p class="text-sm leading-relaxed text-slate-600">{{ path.summary }}</p>
            <ul class="mt-5 space-y-2.5 text-sm text-slate-700">
              <li class="flex items-start gap-2.5">
                <i class="fas fa-user-graduate mt-0.5 shrink-0 text-xs" :style="`color:${path.accent}`"></i>
                <span><strong class="text-slate-900">Audience:</strong> {{ path.audience }}</span>
              </li>
              <li class="flex items-start gap-2.5">
                <i class="fas fa-calendar-alt mt-0.5 shrink-0 text-xs" :style="`color:${path.accent}`"></i>
                <span><strong class="text-slate-900">Format:</strong> {{ path.format }}</span>
              </li>
              <li class="flex items-start gap-2.5">
                <i class="fas fa-trophy mt-0.5 shrink-0 text-xs" :style="`color:${path.accent}`"></i>
                <span><strong class="text-slate-900">Outcome:</strong> {{ path.outcome }}</span>
              </li>
            </ul>
            <RouterLink :to="path.link" class="mt-6 inline-flex h-9 items-center gap-2 rounded-full px-4 text-sm font-bold text-white transition hover:opacity-90" :style="`background:${path.bg}`">
              View pathway <i class="fas fa-arrow-right text-xs"></i>
            </RouterLink>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- â”€â”€ For Organizations â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
        <!-- Left pitch -->
        <div class="flex flex-col justify-center">
          <p class="c2i-section-label" style="color:#43a047">For Organizations</p>
          <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">Build digital systems that actually get used</h2>
          <p class="mt-4 text-slate-500 leading-relaxed">We partner with NGOs, schools, and growing businesses to deliver software products, team training, and implementation support suited to local constraints.</p>
          <ul class="mt-6 space-y-3">
            <li v-for="benefit in orgBenefits" :key="benefit" class="flex items-start gap-3 text-sm text-slate-700">
              <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full text-[10px] text-white" style="background:#1e88e5">âœ“</span>
              {{ benefit }}
            </li>
          </ul>
          <RouterLink to="/contact-us" class="c2i-btn-primary mt-8 self-start gap-2">
            Discuss a Project <i class="fas fa-arrow-right text-xs"></i>
          </RouterLink>
        </div>

        <!-- Right service grid -->
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <article v-for="service in services" :key="service.name" class="c2i-card group p-5">
            <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl transition group-hover:scale-110" :style="`background:${service.color}18`">
              <i :class="service.icon" :style="`color:${service.color}`"></i>
            </div>
            <h3 class="font-bold text-slate-900">{{ service.name }}</h3>
            <p class="mt-1.5 text-sm text-slate-500 leading-relaxed">{{ service.text }}</p>
            <RouterLink :to="service.link" class="mt-3 inline-flex items-center gap-1.5 text-sm font-bold transition" :style="`color:${service.color}`">
              Learn more <i class="fas fa-arrow-right text-xs"></i>
            </RouterLink>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- â”€â”€ How We Work â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
  <section class="py-20 text-white" style="background:linear-gradient(135deg,#0d1b2a 0%,#12294d 60%,#0d2b1f 100%)">
    <div class="container mx-auto px-4">
      <div class="mb-12 text-center">
        <p class="c2i-section-label" style="color:#f9a825">How We Work</p>
        <h2 class="mt-3 text-3xl font-bold md:text-5xl">From classroom to deployment</h2>
      </div>

      <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
        <article v-for="step in journeySteps" :key="step.number" class="relative rounded-2xl p-6 transition hover:-translate-y-1" style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.1)">
          <p class="text-5xl font-extrabold leading-none" style="color:rgba(255,255,255,0.06)">{{ step.number }}</p>
          <div class="mt-2 inline-flex h-10 w-10 items-center justify-center rounded-xl" :style="`background:${step.color}22`">
            <i :class="step.icon" :style="`color:${step.color}`"></i>
          </div>
          <h3 class="mt-3 text-base font-bold text-white">{{ step.title }}</h3>
          <p class="mt-2 text-sm c2i-body-light">{{ step.text }}</p>
        </article>
      </div>
    </div>
  </section>

  <!-- â”€â”€ CTA â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€â”€ -->
  <section class="relative overflow-hidden py-20 text-white" style="background:linear-gradient(135deg,#12294d 0%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute inset-0" style="background:radial-gradient(ellipse at 50% 0%,rgba(30,136,229,0.18),transparent 65%)"></div>
    <div class="container relative mx-auto px-4 text-center">
      <p class="c2i-section-label" style="color:#f9a825">Ready to collaborate?</p>
      <h2 class="mx-auto mt-4 max-w-3xl text-3xl font-bold md:text-5xl">Build local solutions with regional impact.</h2>
      <p class="mx-auto mt-4 max-w-2xl c2i-body-light">Whether you need training, software delivery, or implementation support â€” our team is ready to work with you.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <RouterLink to="/contact-us" class="c2i-btn-primary gap-2">
          Talk to our team <i class="fas fa-arrow-right text-xs"></i>
        </RouterLink>
        <RouterLink to="/blogs" class="c2i-btn-ghost">
          Read our insights
        </RouterLink>
      </div>
    </div>
  </section>
</template>

<script setup>
import { RouterLink } from 'vue-router';

const heroImage = '/assets/images/app.avif';

const heroStats = [
  { value: '300+', label: 'Learners trained', color: '#93c5fd' },
  { value: '10+',  label: 'Systems delivered', color: '#86efac' },
  { value: '1M',   label: 'Lives goal 2035', color: '#fde68a' },
];

const partnerTypes = ['Schools', 'Universities', 'SMEs', 'NGOs', 'Public Institutions', 'Innovation Hubs'];

const pathways = [
  {
    badge: 'Skills Track',
    name: 'Learn Programming',
    summary: 'Project-led software foundations for people building a tech career from scratch or levelling up.',
    audience: 'Students, graduates, and career switchers',
    format: 'Mentored projects, practical assignments, guided review',
    outcome: 'Portfolio-ready projects and stronger job readiness',
    link: '/programming',
    bg: '#1e88e5',
    accent: '#1e88e5',
    icon: 'fas fa-code',
  },
  {
    badge: 'Workforce Track',
    name: 'ICT Training',
    summary: 'Professional digital capability programs for teams that need stronger operations and security.',
    audience: 'Staff teams, institutions, and SMEs',
    format: 'Facilitated workshops and implementation-focused sessions',
    outcome: 'Improved digital workflows and confident team adoption',
    link: '/ict-training',
    bg: '#43a047',
    accent: '#43a047',
    icon: 'fas fa-laptop',
  },
  {
    badge: 'Inclusion Track',
    name: 'Women in Tech',
    summary: 'A focused growth pathway for women entering and advancing in technical and leadership roles.',
    audience: 'Women learners and early-career professionals',
    format: 'Mentorship, peer support, and practical skills coaching',
    outcome: 'Clearer progression into technical opportunities',
    link: '/women-in-tech',
    bg: '#f9a825',
    accent: '#e65100',
    icon: 'fas fa-users',
  },
];

const orgBenefits = [
  'Custom software and web apps built for local workflows',
  'E-Health and e-education platforms for public institutions',
  'Digital security, infrastructure, and compliance advisory',
  'Skills training, internships, and startup incubation support',
];

const services = [
  { name: 'Custom Software & Web Apps',       text: 'Platforms engineered for local workflows, public services, and business growth.',            link: '/softwares',         icon: 'fas fa-code-branch',    color: '#1e88e5' },
  { name: 'E-Health & E-Education Solutions', text: 'Digital health records, LMS, and e-service platforms for schools and clinics.',              link: '/ehealth',           icon: 'fas fa-heartbeat',      color: '#43a047' },
  { name: 'Digital Security & Infrastructure', text: 'Secure architecture, compliance audits, and infrastructure aligned to Uganda DPPA 2019.',   link: '/digital-security',  icon: 'fas fa-shield-alt',     color: '#f9a825' },
  { name: 'Digital Skills Training & Internships', text: 'Structured programs that turn students into job-ready engineers with real project experience.', link: '/digital-skills', icon: 'fas fa-graduation-cap', color: '#1e88e5' },
  { name: 'Startup Incubator & MVP Support',  text: 'From idea to validated MVP — rapid prototyping, mentorship, and launch support.',           link: '/startup-incubator', icon: 'fas fa-rocket',         color: '#43a047' },
  { name: 'Green Tech & Automation',          text: 'Smart systems, IoT, and automation solutions for agriculture, energy, and logistics.',       link: '/green-tech',        icon: 'fas fa-leaf',           color: '#f9a825' },
];

const journeySteps = [
  { number: '01', title: 'Assess Context',   text: 'We start from your real environment, constraints, and delivery goals.',                icon: 'fas fa-search',         color: '#1e88e5' },
  { number: '02', title: 'Build Capacity',   text: 'Teams and learners gain role-specific digital skills with hands-on support.',         icon: 'fas fa-graduation-cap', color: '#43a047' },
  { number: '03', title: 'Deliver Systems',  text: 'We design and implement software products that solve practical problems.',            icon: 'fas fa-code',           color: '#f9a825' },
  { number: '04', title: 'Sustain Outcomes', text: 'Documentation, governance, and support keep solutions useful over time.',            icon: 'fas fa-shield-alt',     color: '#1e88e5' },
];
</script>
