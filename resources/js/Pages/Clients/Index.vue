<template>
    <Head title="Clients"/>
        <Layout1>
            <div>
                <div class="max-w-7xl mx-auto ">
                    <!-- <ClientsCard v-for="client in props.clients" :client="client" :key="client.id"/> -->
                    <table class="mt-4 table-auto w-full border-collapse">
                        <thead>
                        <tr>
                            <th class="px-4 py-2 bg-gray-200">Name</th>
                            <th class="px-4 py-2 bg-gray-200">Address</th>
                            <th class="px-4 py-2 bg-gray-200">Level</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="client in clients.data" :key="client.id">
                            <td class="border px-4 py-2">{{ client.last_name }}, {{ client.first_name }}</td>
                            <td class="border px-4 py-2">{{ client.address }}</td>
                            <td class="border px-4 py-2">{{ client.level }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <Pagination :links="clients.links" class="mt-6 flex justify-center"/>
        </Layout1>
</template>

<script setup>
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout1 from '@/Layouts/Layout1.vue'
// import ClientsCard from '@/Components/ClientsCard.vue'
import Pagination from '@/Layouts/Pagination.vue'
import { Head } from '@inertiajs/vue3';


const props = defineProps({
    clients: Object
})

</script>
