<template>
  <!-- Hero -->
  <section class="relative overflow-hidden pt-36 pb-16 text-white md:pt-40" style="background:linear-gradient(135deg,#0d1b2a 0%,#12294d 55%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute left-0 top-0 h-[400px] w-[400px] -translate-x-1/3 -translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(30,136,229,0.28),transparent 70%)"></div>
    <div class="pointer-events-none absolute right-0 bottom-0 h-[300px] w-[300px] translate-x-1/4 translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(67,160,71,0.22),transparent 70%)"></div>
    <div class="container relative mx-auto px-4 text-center">
      <span class="c2i-chip"><i class="fas fa-handshake text-[9px]"></i> Our Ecosystem</span>
      <h1 class="mt-5 text-4xl font-bold leading-tight md:text-5xl">Partners &amp; Collaborators</h1>
      <p class="mx-auto mt-4 max-w-2xl text-base c2i-body-light">
        CodeToInnovate Africa operates within a network of institutions committed to innovation, health, clean energy, and sustainable development across Northern Uganda.
      </p>
    </div>
    <div class="mt-12 w-full" style="height:3px;background:linear-gradient(90deg,#1e88e5 33%,#43a047 33% 66%,#f9a825 66%)"></div>
  </section>

  <!-- Partner Cards -->
  <section class="py-20" style="background:#f0f4f8">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 gap-10 lg:grid-cols-2">
        <article v-for="partner in partners" :key="partner.name" class="c2i-card overflow-hidden">
          <!-- Coloured top band -->
          <div class="relative px-6 py-6" :style="`background:${partner.color}`">
            <div class="flex items-center gap-4">
              <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl" style="background:rgba(255,255,255,0.22)">
                <i :class="partner.icon" class="text-2xl text-white"></i>
              </div>
              <div>
                <span class="block text-[10px] font-bold uppercase tracking-[0.2em] text-white/60">{{ partner.category }}</span>
                <h2 class="text-xl font-bold text-white leading-tight">{{ partner.name }}</h2>
              </div>
            </div>
            <div class="pointer-events-none absolute -right-8 -top-8 h-32 w-32 rounded-full" style="background:rgba(255,255,255,0.07)"></div>
          </div>

          <!-- Body -->
          <div class="p-6">
            <p class="text-sm leading-relaxed text-slate-600">{{ partner.description }}</p>

            <h3 class="mt-6 text-xs font-bold uppercase tracking-widest text-slate-400">Key Highlights</h3>
            <ul class="mt-3 space-y-2.5 text-sm text-slate-700">
              <li v-for="point in partner.highlights" :key="point" class="flex items-start gap-2.5">
                <i class="fas fa-check-circle mt-0.5 shrink-0 text-xs" :style="`color:${partner.color}`"></i>
                <span>{{ point }}</span>
              </li>
            </ul>

            <div v-if="partner.extra" class="mt-5 rounded-xl p-4 text-sm text-slate-700" :style="`background:${partner.color}12;border:1px solid ${partner.color}30`">
              <p class="font-semibold" :style="`color:${partner.color}`">{{ partner.extra.label }}</p>
              <p class="mt-1 leading-relaxed text-slate-600">{{ partner.extra.text }}</p>
            </div>

            <div class="mt-5 flex flex-wrap items-center gap-2">
              <span v-for="tag in partner.tags" :key="tag" class="rounded-full px-3 py-1 text-[11px] font-semibold" :style="`background:${partner.color}18;color:${partner.color}`">{{ tag }}</span>
            </div>

            <div class="mt-5 flex flex-wrap items-center gap-3">
              <a v-if="partner.url" :href="partner.url" target="_blank" rel="noopener noreferrer"
                 class="inline-flex items-center gap-2 rounded-full px-5 py-2 text-sm font-bold text-white transition hover:opacity-90"
                 :style="`background:${partner.color}`">
                Visit website <i class="fas fa-external-link-alt text-xs"></i>
              </a>
              <span v-if="partner.location" class="inline-flex items-center gap-1.5 text-sm text-slate-500">
                <i class="fas fa-map-marker-alt text-xs" :style="`color:${partner.color}`"></i>
                {{ partner.location }}
              </span>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative overflow-hidden py-20 text-white" style="background:linear-gradient(135deg,#12294d 0%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute inset-0" style="background:radial-gradient(ellipse at 50% 0%,rgba(30,136,229,0.18),transparent 65%)"></div>
    <div class="container relative mx-auto px-4 text-center">
      <p class="c2i-section-label" style="color:#f9a825">Interested in partnering?</p>
      <h2 class="mx-auto mt-4 max-w-3xl text-3xl font-bold md:text-4xl">Collaborate with us to build lasting impact.</h2>
      <p class="mx-auto mt-4 max-w-2xl c2i-body-light">Whether you are an institution, NGO, or private organization, we are open to partnerships that advance innovation, education, and community development.</p>
      <div class="mt-8 flex flex-wrap justify-center gap-3">
        <RouterLink to="/contact-us" class="c2i-btn-primary gap-2">
          Get in touch <i class="fas fa-arrow-right text-xs"></i>
        </RouterLink>
        <RouterLink to="/about" class="c2i-btn-ghost">
          Learn about us
        </RouterLink>
      </div>
    </div>
  </section>
</template>

<script setup>
import { RouterLink } from 'vue-router';

const partners = [
  {
    name: 'Technology & Innovation Support Centre (TISC)',
    category: 'Innovation & IP Hub',
    icon: 'fas fa-lightbulb',
    color: '#1e88e5',
    description: 'A specialized hub at Uganda Technical College Lira, facilitated by the Uganda Registration Services Bureau (URSB) in partnership with the World Intellectual Property Organization (WIPO). TISCs bridge creative ideas and commercially viable, IP-protected products — serving as "engines of transformation" for local innovators.',
    highlights: [
      'Access to global patent databases and scientific journals (including ARDI & ASPI) for prior art searches',
      'Expert guidance on patents, trademarks, industrial designs, and IP rights management',
      'Commercialization support: technology licensing and pathways to market',
      'Capacity building through patent drafting workshops and IP law training',
      'Freedom to Operate searches to assess infringement risk before heavy development investment',
      'Expanded into secondary schools: Comboni College and Dr. Obote College in Lira',
    ],
    extra: {
      label: 'Host Institution',
      text: 'Uganda Technical College – Lira. Focus areas include agriculture & food science, civil engineering, electrical & electronic engineering, ICT, and mechanical engineering.',
    },
    tags: ['IP Services', 'Innovation', 'WIPO', 'URSB', 'UTC Lira', 'Patent Search'],
    url: null,
    location: 'Uganda Technical College, Lira',
  },
  {
    name: 'MACSO Christ – Medical & Community Support Organisation Uganda',
    category: 'Healthcare & Community',
    icon: 'fas fa-heartbeat',
    color: '#43a047',
    description: 'A registered nonprofit in Lira City focused on restoring health, dignity, and opportunity through integrated medical and community support programs. MACSO-Uganda combines preventive, curative, and rehabilitative care with education and livelihood support — serving families across Northern Uganda.',
    highlights: [
      'Reproductive, maternal, and child health services through Christ Care Clinic',
      'HIV and chronic disease care with community outreach programs',
      'Community-based rehabilitation and disability support services',
      'Gender-based violence prevention and response programs',
      'Education, vocational pathways, and economic empowerment initiatives',
      '12+ community programs reaching 5,000+ lives with 30+ care partners',
    ],
    extra: {
      label: 'Why We Partner',
      text: 'CodeToInnovate Africa developed and maintains the digital platform for MACSO Christ, enabling better patient management and community outreach coordination.',
    },
    tags: ['Healthcare', 'Community', 'Lira City', 'NGO', 'Maternal Health'],
    url: 'https://macsochrist.org',
    location: 'Plot 76/78 Barapowo, Lira',
  },
  {
    name: 'Reversible Technologies',
    category: 'Clean Energy & Consultancy',
    icon: 'fas fa-solar-panel',
    color: '#f9a825',
    description: 'Based at the Renewable Energy Training Centre at UTC Lira, Reversible Technologies promotes clean energy access across Uganda through technical advisory, consultancy, and product delivery. Their experienced team conducts assessments and develops tailored solutions across four major focus areas.',
    highlights: [
      'Vocational skills development in renewable energy technologies',
      'Renewable energy support services and system assessments',
      'Energy efficiency auditing and advisory services',
      'Piloting of appropriate clean technologies for local contexts',
      'Located 1km from Lira City Centre along Lira-Soroti Agwata Highway',
    ],
    extra: {
      label: 'Contact',
      text: '+256 781 546 484 | info@rtechnologies.org',
    },
    tags: ['Clean Energy', 'Solar', 'Consultancy', 'UTC Lira', 'GIZ'],
    url: 'https://rtechnologies.org',
    location: 'Renewable Energy Training Centre, UTC Lira',
  },
  {
    name: 'Renewable Energy Training Centre (RETC)',
    category: 'Vocational Training',
    icon: 'fas fa-leaf',
    color: '#0d7a5f',
    description: 'A state-of-the-art regional training facility at UTC Lira, developed through the ProREU project in partnership with ACSET Uganda, Urbis Foundation (Germany), and GIZ (on behalf of the German government). The centre decentralizes renewable energy skills across the Lango sub-region, ensuring solar installations meet rigorous national standards.',
    highlights: [
      'Trains Solar Extension Agents (SEAs) as regional technical multipliers',
      'DIT-certified training using the NVTI Solar Curriculum national standard',
      'Covers professional installation, maintenance, and troubleshooting for households and public institutions',
      'System mapping and database management for regional energy infrastructure',
      'Hosts Solar Clinics connecting trained technicians, solar companies, and local communities',
      'Already offers general Electrical Engineering diplomas with solar as a specialized unit',
    ],
    extra: {
      label: 'Strategic Synergy with C2IA',
      text: 'The TISC provides the intellectual property and innovation framework, while the RETC provides technical and vocational validation. Together, they equip C2IA students and interns with both software/hardware skills and DIT-certified field-ready energy competencies.',
    },
    tags: ['Solar Training', 'DIT Certified', 'GIZ', 'ProREU', 'ACSET', 'UTC Lira'],
    url: null,
    location: 'Uganda Technical College, Lira',
  },
];
</script>
