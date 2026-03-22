<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Layout from '@/layouts/ClubhouseLayout.vue';
import type { Club, Paginated } from '@/types';

defineProps<{ clubs: Paginated<Club> }>();
</script>

<template>
    <Layout title="Clubs">
        <Head title="Clubs" />
        <div class="flex flex-col space-y-2">
            <div class="text-white flex flex-col space-y-2" v-for="club in clubs.data" :key="club.id">
                <h3 class="text-xl" v-text="club.name" />
                <p v-if="club.description" v-text="club.description" />
                <p v-text="club.users.length + ' members'" />
            </div>
        </div>
    </Layout>
</template>
