<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import ClubhouseLayout from '@/layouts/ClubhouseLayout.vue';
import { show } from '@/routes/club';
import type { Club, Paginated } from '@/types';

defineProps<{ clubs: Paginated<Club> }>();
</script>

<template>
    <ClubhouseLayout title="Clubs">
        <Head title="Clubs" />
        <div class="flex flex-col divide-y-2 border-gray-700">
            <div v-for="club in clubs.data" :key="club.id" class="text-white flex flex-col space-y-2 py-2">
                <h3 class="flex flex-row justify-between items-center">
                    <span class="text-xl" v-text="`${club.name}${club.user_is_admin ? ' (Admin)' : ''}`" />
                    <Link :href="show(club.id)" class="bg-gray-700 hover:bg-gray-800 py-1 px-2 rounded-sm">Show</Link>
                </h3>
                <p v-if="club.description" v-text="club.description" />
                <p v-text="club.users.length + ' member' + (club.users.length === 1 ? '' : 's')" />
            </div>
        </div>
    </ClubhouseLayout>
</template>
