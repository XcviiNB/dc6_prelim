<script setup>
    import MainNav from '@/Components/MainNav.vue'
    import DropdownOption from '@/Components/DropdownOption.vue';
    import { ref, provide } from 'vue';

    let width = ref('w-[250px]')
    let hide = ref(false)
    // let motif = ref('')
    let sidebarClr = ref('bg-gray-900')

    function toggleWidth() {
        if(width.value == 'w-[250px]') {
            width.value = 'w-[90px]'
            hide.value = true
        }else {
            width.value = ['w-[250px]']
            hide.value = false
        }
    }

    function toggleMotif(color) {
        sidebarClr.value = color
    }
    provide('color', sidebarClr);
</script>

<template>
    <div>
        <!-- <nav class="flex items-center justify-between p-6 bg-gray-800"></nav> -->
        <div class="flex min-h-screen">
            <div :class="sidebarClr">
                <div id="sidebar" class="p-6 duration-500" :class="width" style="position: relative;">
                    <button class="text-xl text-gray-600" @click="toggleWidth" style="position: absolute; right: 10px; top:10px">
                        <i class="fa-solid fa-bars text-gray-500"></i>
                    </button>
                    <div id="branding" :hidden="hide" class="my-6">
                        <img src="assets/N.png" alt="Logo"
                            class="w-[170px] h-[170px] mx-auto rounded-full object-cover">
                    </div>
                    <hr class="border-gray-600" :hidden="hide">
                    <MainNav :hidden="hide" :textColor="sidebarClr"></MainNav>

                    <!-- <DropdownOption /> -->

                    <div class="mt-5">
                        <div class="flex">
                            <button class="px-4 py-2 mr-2 text-sm text-white bg-red-600 border border-gray-200 dark:text-gray-400
                                dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                                @click="toggleMotif('bg-red-900')"
                            >
                                Red
                            </button>
                            <button class="px-4 py-2 mr-2 text-sm text-white bg-blue-600 border border-gray-200 dark:text-gray-400
                                dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                                @click="toggleMotif('bg-blue-900')"
                            >
                                Blue
                            </button>
                            <button
                                class="px-4 py-2 text-sm text-white bg-green-600 border border-gray-200 dark:text-gray-400
                                dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer"
                                @click="toggleMotif('bg-green-900')"
                            >
                                Green
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="container" class="flex-1">
                <slot />
            </div>
        </div>
    </div>


</template>
