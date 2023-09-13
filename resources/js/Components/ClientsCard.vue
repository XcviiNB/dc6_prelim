<script setup>
const props = defineProps({
    clients: Object
})
</script>

<template>
    <div class="grid grid-cols-4 gap-4 mt-5">
        <div class="flex flex-col items-center pb-10 bg-black rounded-xl" v-for="client in clients.data" :key="client.id">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg mt-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPUdXXsh2rff2UZJ2nYBy7a03e7_rqScwTNA&usqp=CAU" alt="Client Image"/>
            <h5 class="mb-1 text-xl font-medium text-gray-900 text-white">{{ client.last_name }}, {{ client.first_name }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400 text-center">{{ client.address }}</span>
            <!-- <span class="text-sm text-gray-500 dark:text-gray-400">{{ client.level }}</span> -->
        </div>
    </div>
</template>

