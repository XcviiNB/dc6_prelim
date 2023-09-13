<template>
    <Layout1>
        <Navbar />
        <div class="mx-3">
            <ClientsCard :clients="clients"/>
        </div>
        <Pagination :links="clients.links" class="mt-6 flex justify-center"/>
    </Layout1>
</template>


<script setup>
import Layout1 from '@/Layouts/Layout1.vue'
import Pagination from '@/Layouts/Pagination.vue'
import ClientsCard from '@/Components/ClientsCard.vue'
import Navbar from '@/Components/Navbar.vue'
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

const props = defineProps({
    clients: Object,
    // preserveScroll: true
})

</script>
