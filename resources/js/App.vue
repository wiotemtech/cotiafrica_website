<template>
  <div>
    <AppHeader />
    <main>
      <router-view />
    </main>
    <AppFooter />

    <div class="c2i-floating-social" aria-label="Quick contact links">
      <a href="https://wa.me/256779512100?text=Hello%20CodeToInnovate%20Africa%2C%20I%27d%20like%20to%20learn%20more." target="_blank" rel="noopener noreferrer" class="c2i-floating-social-link c2i-floating-whatsapp" aria-label="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
        <span>Chat with us</span>
      </a>
      <a href="https://x.com/CodeToInnovateA" target="_blank" rel="noopener noreferrer" class="c2i-floating-social-link c2i-floating-x" aria-label="Follow CodeToInnovate Africa on X">
        <strong aria-hidden="true">X</strong>
        <span>Follow on X</span>
      </a>
    </div>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
import AppHeader from './components/AppHeader.vue';
import AppFooter from './components/AppFooter.vue';

onMounted(() => {
  if (window.AOS) {
    window.AOS.init({ duration: 700, once: true, offset: 30 });
  }
});
</script>
