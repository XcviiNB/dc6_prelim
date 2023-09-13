<template>
    <nav class="flex items-center justify-between p-6 bg-green-700">
        <ResponsiveNavLink :href="route('logout')" method="post" as="button">
            Log Out
        </ResponsiveNavLink>
    </nav>
</template>

<script setup>
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

</script>
