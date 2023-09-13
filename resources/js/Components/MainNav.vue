<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

const { hidden } = defineProps(['hidden']);
</script>

<template>
  <div class="main-nav">
    <Link href="/dashboard">
      <i class="fa fa-home"></i> <span :hidden="hidden">Dashboard</span>
    </Link>
    <Link :href="route('clients')" :active="route().current('clients')">
        <i class="fa-solid fa-address-card"></i> <span :hidden="hidden">Clients</span>
    </Link>
    <Link href="/profile">
      <i class="fa-solid fa-user"></i> <span :hidden="hidden">Profile</span>
    </Link>
  </div>
</template>
