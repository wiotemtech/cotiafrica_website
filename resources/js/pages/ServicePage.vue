<template>
  <!-- Hero -->
  <section class="relative overflow-hidden pt-36 text-white c2i-grid-glow md:pt-40" style="background:linear-gradient(135deg,#0d1b2a 0%,#12294d 55%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute left-0 top-0 h-[400px] w-[400px] -translate-x-1/3 -translate-y-1/4 rounded-full blur-3xl" style="background:radial-gradient(circle,rgba(30,136,229,0.22),transparent 70%)"></div>
    <div class="container relative mx-auto px-4 pb-20 pt-8">
      <span class="c2i-chip"><i :class="page.icon" class="text-[9px]"></i> {{ page.kicker }}</span>
      <h1 class="mt-5 max-w-4xl text-4xl font-bold md:text-5xl">{{ page.title }}</h1>
      <p class="mt-5 max-w-2xl c2i-body-light">{{ page.description }}</p>
      <div class="mt-8 flex flex-wrap gap-3">
        <RouterLink to="/contact-us" class="c2i-btn-primary gap-2">Discuss this service <i class="fas fa-arrow-right text-xs"></i></RouterLink>
        <RouterLink to="/about" class="c2i-btn-ghost">About Us</RouterLink>
      </div>
    </div>
    <div class="w-full" style="height:3px;background:linear-gradient(90deg,#1e88e5 33%,#43a047 33% 66%,#f9a825 66%)"></div>
  </section>

  <!-- Features grid -->
  <section class="bg-white py-20">
    <div class="container mx-auto px-4">
      <div class="mb-10 text-center">
        <p class="c2i-section-label" :style="`color:${page.color}`">What's included</p>
        <h2 class="mt-3 text-3xl font-bold text-slate-900">Key capabilities</h2>
      </div>
      <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
        <article v-for="item in page.points" :key="item.title" class="c2i-card p-6">
          <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-xl" :style="`background:${page.color}18`">
            <i :class="item.icon" :style="`color:${page.color}`"></i>
          </div>
          <h3 class="font-bold text-slate-900">{{ item.title }}</h3>
          <p class="mt-1.5 text-sm text-slate-500 leading-relaxed">{{ item.text }}</p>
        </article>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="relative overflow-hidden py-16 text-white" style="background:linear-gradient(135deg,#12294d 0%,#0d2b1f 100%)">
    <div class="pointer-events-none absolute inset-0" style="background:radial-gradient(ellipse at 50% 0%,rgba(30,136,229,0.18),transparent 65%)"></div>
    <div class="container relative mx-auto px-4 text-center">
      <h2 class="text-2xl font-bold md:text-3xl">Need this in your context?</h2>
      <p class="mx-auto mt-3 max-w-xl c2i-body-light">Talk to us about implementation, training, and long-term support tailored to your organisation.</p>
      <RouterLink to="/contact-us" class="c2i-btn-primary mt-7 gap-2">Contact Us <i class="fas fa-arrow-right text-xs"></i></RouterLink>
    </div>
  </section>
</template>

<script setup>
import { computed } from 'vue';
import { useRoute, RouterLink } from 'vue-router';

const route = useRoute();

const pages = {
  software: {
    kicker: 'Service', icon: 'fas fa-code-branch', color: '#1e88e5',
    title: 'Custom Software & Web Apps',
    description: 'Platforms engineered for local workflows, public services, and business growth — built securely and maintained long term.',
    points: [
      { icon: 'fas fa-layer-group',  title: 'Full-stack development',       text: 'Web apps, APIs, dashboards, and portals built on modern, maintainable stacks.' },
      { icon: 'fas fa-shield-alt',   title: 'Secure by design',             text: 'OWASP-compliant architecture with role-based access, encryption, and audit logging.' },
      { icon: 'fas fa-plug',         title: 'System integrations',          text: 'Connect with existing ERPs, government systems, payment gateways, and third-party APIs.' },
      { icon: 'fas fa-code',         title: 'Source code ownership',        text: 'You own all deliverables — code, documentation, and infrastructure configurations.' },
      { icon: 'fas fa-tools',        title: 'Post-launch maintenance',      text: 'Bug fixes, feature updates, and monitoring support after go-live.' },
      { icon: 'fas fa-file-alt',     title: 'Requirements & documentation', text: 'Clear functional specs and technical docs produced at every stage.' },
    ],
  },
  ehealth: {
    kicker: 'Service', icon: 'fas fa-heartbeat', color: '#43a047',
    title: 'E-Health & E-Education Solutions',
    description: 'Digital health records, learning management systems, and e-service platforms designed for schools, clinics, and public institutions across Uganda.',
    points: [
      { icon: 'fas fa-notes-medical', title: 'Patient & health records',  text: 'Secure digital records management for clinics, hospitals, and community health workers.' },
      { icon: 'fas fa-chalkboard-teacher', title: 'Learning Management Systems', text: 'LMS platforms for schools and colleges with course delivery, assessments, and progress tracking.' },
      { icon: 'fas fa-user-shield',  title: 'Data privacy compliance',   text: 'Systems aligned to Uganda\'s Data Protection and Privacy Act (2019).' },
      { icon: 'fas fa-mobile-alt',   title: 'Mobile-first access',       text: 'Lightweight interfaces that work reliably on low-bandwidth and entry-level devices.' },
      { icon: 'fas fa-chart-bar',    title: 'Reporting & analytics',     text: 'Dashboards that surface actionable insights for administrators and decision-makers.' },
      { icon: 'fas fa-graduation-cap', title: 'Student information systems', text: 'Enrollment, attendance, grading, and certificate management for educational institutions.' },
    ],
  },
  'digital-security': {
    kicker: 'Service', icon: 'fas fa-shield-alt', color: '#f9a825',
    title: 'Digital Security & Infrastructure',
    description: 'Protect your systems, data, and users with security-first infrastructure and compliance advisory aligned to Ugandan and international standards.',
    points: [
      { icon: 'fas fa-search',        title: 'Security audits',            text: 'Structured vulnerability assessments and penetration testing for web apps and internal systems.' },
      { icon: 'fas fa-lock',          title: 'Data encryption & access control', text: 'End-to-end encryption, secure authentication, and least-privilege access across all systems.' },
      { icon: 'fas fa-file-contract', title: 'DPPA compliance advisory',   text: 'Guidance on Uganda Data Protection & Privacy Act 2019 obligations for organisations handling personal data.' },
      { icon: 'fas fa-server',        title: 'Infrastructure setup',       text: 'Cloud and on-premise infrastructure configuration for reliability, uptime, and disaster recovery.' },
      { icon: 'fas fa-bell',          title: 'Monitoring & alerting',      text: 'Real-time threat detection, log management, and incident response procedures.' },
      { icon: 'fas fa-users-cog',     title: 'Security awareness training', text: 'Practical workshops for staff teams on safe digital practices, phishing, and data handling.' },
    ],
  },
  'digital-skills': {
    kicker: 'Program', icon: 'fas fa-graduation-cap', color: '#1e88e5',
    title: 'Digital Skills Training & Internships',
    description: 'Structured programs that turn students and young professionals into job-ready digital engineers — with real project experience and mentorship.',
    points: [
      { icon: 'fas fa-code',          title: 'Software development',       text: 'Hands-on programming training covering web, mobile, and backend development.' },
      { icon: 'fas fa-project-diagram', title: 'Project-based learning',   text: 'Real client briefs and team projects that build genuine portfolio experience.' },
      { icon: 'fas fa-user-tie',      title: 'Internship placement',       text: 'Supported internships with partner organisations in Northern Uganda and beyond.' },
      { icon: 'fas fa-briefcase',     title: 'Career readiness',           text: 'CV, portfolio, technical interview prep, and professional skills development.' },
      { icon: 'fas fa-chalkboard',    title: 'ICT literacy for institutions', text: 'Capacity-building programs for university departments and vocational institutions.' },
      { icon: 'fas fa-certificate',   title: 'Certification support',      text: 'Preparation for industry certifications including CompTIA, Google, and Microsoft credentials.' },
    ],
  },
  'startup-incubator': {
    kicker: 'Program', icon: 'fas fa-rocket', color: '#43a047',
    title: 'Startup Incubator & MVP Support',
    description: 'From idea to validated MVP — CodeToInnovate Africa provides rapid prototyping, mentorship, and technical build support for African tech startups.',
    points: [
      { icon: 'fas fa-lightbulb',     title: 'Idea validation',            text: 'Structured workshops to pressure-test your concept against real market and user needs.' },
      { icon: 'fas fa-pencil-ruler',  title: 'MVP design & build',         text: 'Lean product development focused on getting a testable version in front of users fast.' },
      { icon: 'fas fa-users',         title: 'Mentorship network',         text: 'Access to experienced engineers, product leads, and business advisors across the ecosystem.' },
      { icon: 'fas fa-code-branch',   title: 'Technical co-development',   text: 'Embedded engineers work alongside your founding team to build core product features.' },
      { icon: 'fas fa-chart-line',    title: 'Growth strategy support',    text: 'Go-to-market guidance, traction metrics, and pitch deck preparation for funding rounds.' },
      { icon: 'fas fa-handshake',     title: 'Partner & investor links',   text: 'Introductions to local and regional partners, accelerators, and grant opportunities.' },
    ],
  },
  'green-tech': {
    kicker: 'Service', icon: 'fas fa-leaf', color: '#f9a825',
    title: 'Green Tech & Automation',
    description: 'Smart systems, IoT, and automation solutions for agriculture, energy, and logistics — making Ugandan operations more efficient and sustainable.',
    points: [
      { icon: 'fas fa-seedling',      title: 'AgriTech solutions',         text: 'Digital tools for crop monitoring, market access, and supply chain visibility for farmers.' },
      { icon: 'fas fa-solar-panel',   title: 'Renewable energy systems',   text: 'Smart monitoring and control systems for solar and off-grid energy installations.' },
      { icon: 'fas fa-robot',         title: 'Process automation',         text: 'Workflow automation that reduces manual effort and error in business and field operations.' },
      { icon: 'fas fa-broadcast-tower', title: 'IoT sensor networks',      text: 'Low-cost sensor deployments for environmental monitoring, logistics, and facility management.' },
      { icon: 'fas fa-truck',         title: 'Logistics & fleet tracking', text: 'GPS-based fleet management and route optimisation for transport and distribution.' },
      { icon: 'fas fa-tachometer-alt', title: 'Operations dashboards',     text: 'Real-time visibility into assets, performance, and field activity for operations teams.' },
    ],
  },
  // Legacy routes still accessible
  mobile: {
    kicker: 'Service', icon: 'fas fa-mobile-alt', color: '#43a047',
    title: 'Mobile App Development',
    description: 'Android and iOS experiences built for field realities — performant, offline-capable, and maintainable.',
    points: [
      { icon: 'fas fa-android',       title: 'Android & iOS',              text: 'Native and cross-platform mobile apps using modern frameworks.' },
      { icon: 'fas fa-wifi',          title: 'Offline-first design',       text: 'Apps that work reliably on low-connectivity networks and sync when online.' },
      { icon: 'fas fa-tachometer-alt', title: 'Performance optimization',  text: 'Fast load times and minimal data usage designed for entry-level devices.' },
      { icon: 'fas fa-bell',          title: 'Push notifications',         text: 'Targeted in-app and push messaging for engagement and operations.' },
      { icon: 'fas fa-lock',          title: 'Secure data handling',       text: 'Local encryption and secure API communication protecting user data on device.' },
      { icon: 'fas fa-tools',         title: 'Ongoing support',            text: 'Version updates, OS compatibility, and feature additions post-launch.' },
    ],
  },
  web: {
    kicker: 'Service', icon: 'fas fa-globe', color: '#1e88e5',
    title: 'Web Development',
    description: 'Responsive, high-performance web platforms built for growth and accessibility.',
    points: [
      { icon: 'fas fa-desktop',       title: 'Modern frontend',            text: 'Fast, accessible interfaces built with Vue, React, or server-rendered approaches.' },
      { icon: 'fas fa-server',        title: 'Reliable backend',           text: 'Scalable API and data layers using Laravel, Node.js, or similar proven stacks.' },
      { icon: 'fas fa-universal-access', title: 'Accessibility first',     text: 'WCAG-aligned UI design ensuring all users can engage with your platform.' },
      { icon: 'fas fa-search',        title: 'SEO foundations',            text: 'Technical SEO best practices baked into every site structure and page.' },
      { icon: 'fas fa-tachometer-alt', title: 'Performance',               text: 'Optimised assets, caching, and delivery for fast page loads on any connection.' },
      { icon: 'fas fa-shield-alt',    title: 'Security hardening',         text: 'HTTPS, CSRF protection, input sanitisation, and security headers as standard.' },
    ],
  },
  ai: {
    kicker: 'Service', icon: 'fas fa-brain', color: '#f9a825',
    title: 'AI & Data Analytics',
    description: 'Data-driven intelligence for smarter automation and better decision-making across your organisation.',
    points: [
      { icon: 'fas fa-chart-line',    title: 'Predictive analytics',       text: 'Models that surface trends and forecast outcomes from your operational data.' },
      { icon: 'fas fa-comments',      title: 'NLP assistants',             text: 'Chatbots and text-processing tools that automate common queries and workflows.' },
      { icon: 'fas fa-database',      title: 'Data pipelines',             text: 'ETL workflows and data warehouse setups that make your data actually usable.' },
      { icon: 'fas fa-eye',           title: 'Dashboards & reporting',     text: 'Visual analytics tools tailored to your KPIs and management reporting needs.' },
      { icon: 'fas fa-robot',         title: 'Process automation',         text: 'AI-assisted workflows that reduce manual effort and human error.' },
      { icon: 'fas fa-lock',          title: 'Data governance',            text: 'Policy and tooling for responsible data handling aligned to DPPA 2019.' },
    ],
  },
  programming: {
    kicker: 'Program', icon: 'fas fa-code', color: '#1e88e5',
    title: 'Learn Programming',
    description: 'Career-focused practical training for modern software development — from fundamentals to portfolio-ready projects.',
    points: [
      { icon: 'fas fa-laptop-code',   title: 'Project-based learning',     text: 'Real deliverables from day one — no passive lectures, only hands-on building.' },
      { icon: 'fas fa-user-graduate', title: 'Mentorship',                  text: 'Regular 1:1 and group sessions with working software engineers.' },
      { icon: 'fas fa-briefcase',     title: 'Portfolio readiness',         text: 'Complete deployable projects that demonstrate skills to employers.' },
      { icon: 'fas fa-code-branch',   title: 'Version control & collaboration', text: 'Git, GitHub, and team workflow practices used from the start.' },
      { icon: 'fas fa-server',        title: 'Backend fundamentals',        text: 'APIs, databases, authentication, and deployment basics covered in depth.' },
      { icon: 'fas fa-globe',         title: 'Frontend foundations',        text: 'HTML, CSS, and JavaScript through to modern frameworks and responsive design.' },
    ],
  },
  ict: {
    kicker: 'Program', icon: 'fas fa-laptop', color: '#43a047',
    title: 'ICT Training',
    description: 'Applied ICT capacity building for teams, professionals, and institutions ready to operate securely in a digital environment.',
    points: [
      { icon: 'fas fa-shield-alt',    title: 'Security fundamentals',      text: 'Cyber hygiene, threat awareness, and safe practices for everyday digital work.' },
      { icon: 'fas fa-network-wired', title: 'Networking basics',           text: 'LAN/WAN, routing, and connectivity troubleshooting for operations staff.' },
      { icon: 'fas fa-database',      title: 'Data literacy',              text: 'Working with spreadsheets, databases, and data tools to support decision-making.' },
      { icon: 'fas fa-cloud',         title: 'Cloud tools & productivity', text: 'G Suite, Microsoft 365, cloud storage, and collaborative workflow adoption.' },
      { icon: 'fas fa-chalkboard-teacher', title: 'Facilitated workshops', text: 'Structured cohort sessions tailored to your team\'s current skill level.' },
      { icon: 'fas fa-certificate',   title: 'Certification prep',         text: 'Support for CompTIA A+, Google IT Support, and Microsoft Fundamentals.' },
    ],
  },
  women: {
    kicker: 'Program', icon: 'fas fa-users', color: '#f9a825',
    title: 'Women in Tech',
    description: 'A focused growth pathway for women entering and advancing in technical and leadership roles across East Africa.',
    points: [
      { icon: 'fas fa-users',         title: 'Community network',          text: 'Peer cohorts and alumni connections for support, collaboration, and referrals.' },
      { icon: 'fas fa-chalkboard',    title: 'Technical coaching',         text: 'Structured skill development across programming, design, and data disciplines.' },
      { icon: 'fas fa-user-tie',      title: 'Leadership growth',          text: 'Workshops on communication, negotiation, and navigating the tech industry as a woman.' },
      { icon: 'fas fa-handshake',     title: 'Mentorship matching',        text: 'Paired with professional women in tech roles for guided career development.' },
      { icon: 'fas fa-briefcase',     title: 'Job placement support',      text: 'CV review, mock interviews, and direct connections to hiring partner organisations.' },
      { icon: 'fas fa-seedling',      title: 'Scholarship pathways',       text: 'Access to subsidised and sponsored cohort spots for women from low-income backgrounds.' },
    ],
  },
  cloud: {
    kicker: 'Service', icon: 'fas fa-cloud', color: '#1e88e5',
    title: 'Cloud Computing',
    description: 'Cloud modernisation for resilience, collaboration, and scale — migrating and managing infrastructure that works for African realities.',
    points: [
      { icon: 'fas fa-cloud-upload-alt', title: 'Cloud migration',         text: 'Move legacy systems to reliable cloud environments with minimal disruption.' },
      { icon: 'fas fa-server',        title: 'Infrastructure as code',     text: 'Automated, reproducible server setups using modern DevOps tooling.' },
      { icon: 'fas fa-shield-alt',    title: 'Cloud security',             text: 'Identity management, network policies, and encrypted storage configuration.' },
      { icon: 'fas fa-chart-bar',     title: 'Cost optimisation',          text: 'Right-sized resources and usage monitoring to keep cloud costs under control.' },
      { icon: 'fas fa-sync-alt',      title: 'Backup & disaster recovery', text: 'Automated backups and tested recovery plans to protect against data loss.' },
      { icon: 'fas fa-headset',       title: 'Managed cloud support',      text: 'Ongoing monitoring, incident response, and maintenance for your cloud environment.' },
    ],
  },
};

const page = computed(() => pages[route.meta.key] || pages.software);
</script>
