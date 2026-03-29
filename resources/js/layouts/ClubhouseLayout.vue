<script setup lang="ts">
import ClubhouseBody from '@/layouts/ClubhouseBody.vue';
import ClubhouseSidebar from '@/layouts/ClubhouseSidebar.vue';

defineProps<{ title?: string }>();

</script>

<template>
    <div class="flex flex-row h-full w-full">
        <ClubhouseSidebar />
        <ClubhouseBody :title="title ?? 'Clubhouse'">
            <slot />
        </ClubhouseBody>
    </div>
</template>


