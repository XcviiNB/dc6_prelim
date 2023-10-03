<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

const { hidden } = defineProps(['hidden']);
</script>

<template>
  <div class="main-nav">
    <Link :href="route('dashboard')" :active="route().current('dashboard')">
      <i class="fa fa-home"></i> <span :hidden="hidden">Dashboard</span>
    </Link>
    <Link :href="route('clients')" :active="route().current('clients')">
        <i class="fa-solid fa-address-card"></i> <span :hidden="hidden">Clients List</span>
    </Link>
    <Link v-if="$page.props.auth.user.roles.includes('supplier')" :href="route('supplies')" :active="route().current('supplies')">
        <i class="fa-solid fa-address-card"></i> <span :hidden="hidden">Supplies</span>
    </Link>
  </div>
</template>
