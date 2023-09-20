<script setup>
// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Layout1 from '@/Layouts/Layout1.vue'
import Navbar from '@/Components/Navbar.vue'
import ApplyButton from '@/Components/ApplyButton.vue';
</script>

<template>
    <Layout1>
        <Navbar />
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                    <strong class="text-green-500">Nathaniel R. Batausa</strong>
                    <br>
                    <strong class="text-green-500">BSIT - 4</strong>
                </div> -->
                <ApplyButton />
            </div>
        </div>
    </Layout1>
</template>
