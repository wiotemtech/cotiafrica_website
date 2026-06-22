import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '../pages/HomePage.vue';
import AboutPage from '../pages/AboutPage.vue';
import WhyUsPage from '../pages/WhyUsPage.vue';
import ContactPage from '../pages/ContactPage.vue';
import BlogsPage from '../pages/BlogsPage.vue';
import BlogDetailPage from '../pages/BlogDetailPage.vue';
import ServicePage from '../pages/ServicePage.vue';

const routes = [
  { path: '/', name: 'home', component: HomePage },
  { path: '/about', name: 'about', component: AboutPage },
  { path: '/why-us', name: 'whyus', component: WhyUsPage },
  { path: '/contact-us', name: 'contactus', component: ContactPage },
  { path: '/blogs', name: 'blogs', component: BlogsPage },
  { path: '/blogs/:id/:title', name: 'blogs.show', component: BlogDetailPage },
  { path: '/softwares', name: 'software', component: ServicePage, meta: { key: 'software' } },
  { path: '/mobileApp', name: 'mobileApp', component: ServicePage, meta: { key: 'mobile' } },
  { path: '/webDevelopment', name: 'webDevelopment', component: ServicePage, meta: { key: 'web' } },
  { path: '/ai', name: 'ai', component: ServicePage, meta: { key: 'ai' } },
  { path: '/programming', name: 'programming', component: ServicePage, meta: { key: 'programming' } },
  { path: '/ict-training', name: 'ict-training', component: ServicePage, meta: { key: 'ict' } },
  { path: '/women-in-tech', name: 'women-in-tech', component: ServicePage, meta: { key: 'women' } },
  { path: '/cloude', name: 'cloude', component: ServicePage, meta: { key: 'cloud' } },
  { path: '/ehealth', name: 'ehealth', component: ServicePage, meta: { key: 'ehealth' } },
  { path: '/digital-security', name: 'digital-security', component: ServicePage, meta: { key: 'digital-security' } },
  { path: '/digital-skills', name: 'digital-skills', component: ServicePage, meta: { key: 'digital-skills' } },
  { path: '/startup-incubator', name: 'startup-incubator', component: ServicePage, meta: { key: 'startup-incubator' } },
  { path: '/green-tech', name: 'green-tech', component: ServicePage, meta: { key: 'green-tech' } },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    return { top: 0, behavior: 'smooth' };
  },
});

export default router;
