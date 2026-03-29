<script setup lang="ts">
defineProps<{ title?: string }>();
</script>

<template>
    <div class="flex flex-col bg-gray-600 w-full">
        <header class="py-4 bg-gray-700 shadow-sm">
            <div class="mx-auto flex w-11/12 max-w-7xl flex-row">
                <h1 class="text-2xl" v-text="title ?? 'Clubhouse'" />
            </div>
        </header>
        <main class="w-full overflow-y-scroll p-4">
            <slot />
        </main>
    </div>
</template>


