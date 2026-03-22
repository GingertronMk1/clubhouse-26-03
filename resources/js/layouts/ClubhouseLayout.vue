<script setup lang="ts">
import { computed } from 'vue';

const props = defineProps<{title?: string}>();

const titlePlusClubHouse = computed(() => props.title ? `Clubhouse / ${props.title}` : 'Clubhouse');
</script>

<template>
    <header class="py-4">
        <div class="flex w-11/12 max-w-7xl flex-row mx-auto">
            <h1 class="text-2xl" v-text="titlePlusClubHouse" />
        </div>
    </header>
    <div class="w-11/12 max-w-7xl mx-auto">
        <slot />
    </div>
</template>

<style scoped></style>
