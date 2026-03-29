<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import Layout from '@/layouts/ClubhouseLayout.vue';
import { show } from '@/routes/club';
import type { Club, Paginated } from '@/types';

defineProps<{ clubs: Paginated<Club> }>();
</script>

<template>
    <Layout title="Clubs">
        <Head title="Clubs" />
        <div class="flex flex-col space-y-2">
            <div class="text-white flex flex-col space-y-2" v-for="club in clubs.data" :key="club.id">
                <h3 class="flex flex-row justify-between">
                    <span class="text-xl" v-text="`${club.name}${club.userIsAdmin ? ' (Admin)' : ''}`" />
                    <Link :href="show(club.id)">Show</Link>
                </h3>
                <p v-if="club.description" v-text="club.description" />
                <p v-text="club.users.length + ' member' + (club.users.length === 1 ? '' : 's')" />
            </div>
        </div>
    </Layout>
</template>
