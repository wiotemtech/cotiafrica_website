<template>
  <div>
    <AppHeader />
    <main>
      <router-view />
    </main>
    <AppFooter />
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
