<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Layout from '@/layouts/AppLayout.vue';
import type { Club, Paginated } from '@/types';

defineProps<{ clubs: Paginated<Club> }>();
</script>

<template>
    <Layout>
        <Head title="Index" />
        <div class="flex flex-col space-y-2">
            <div class="text-white" v-for="club in clubs.data" :key="club.id">
                {{ club.name }}
            </div>
        </div>
    </Layout>
</template>
