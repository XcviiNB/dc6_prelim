<script setup>
    import MainNav from '@/Components/MainNav.vue'
    import { ref } from 'vue';

    let width = ref('w-[250px]')
    let hide = ref(false)

    function toggleWidth() {
        if(width.value == 'w-[250px]') {
            width.value = 'w-[90px]'
            hide.value = true
        }else {
            width.value = ['w-[250px]']
            hide.value = false
        }
    }
</script>

<template>
    <div>
        <nav class="flex items-center justify-between p-6 bg-blue-800"></nav>
        <div class="flex min-h-screen">
            <div id="sidebar" class="bg-blue-900 p-6 duration-500" :class="width" style="position: relative;">
                <button class="text-xl text-gray-600" @click="toggleWidth" style="position: absolute; right: 10px; top:10px">
                    <i class="fa-solid fa-bars text-blue-500"></i>
                </button>
                <div id="branding" :hidden="hide">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb8ABH2lareRUW9kf_IvBwhkD-9DRIOLeXIA&usqp=CAU" alt="Logo"
                        class="w-[170px] h-[170px] mx-auto rounded-full object-cover">
                    <h1 class="text-3xl text-center text-blue-300 my-6">Clients</h1>
                </div>
                <hr class="border-blue-600" :hidden="hide">
                <MainNav :hidden="hide"></MainNav>
            </div>

            <div id="container" class="flex-1">
                <slot />
            </div>
        </div>
    </div>


</template>
