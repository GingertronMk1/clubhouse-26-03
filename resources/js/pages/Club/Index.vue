<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import ClubhousePagination from '@/components/Clubhouse/ClubhousePagination.vue';
import ClubhouseLayout from '@/layouts/ClubhouseLayout.vue';
import { show } from '@/routes/club';
import type { Club, Paginated } from '@/types';

defineProps<{ clubs: Paginated<Club> }>();
</script>

<template>
    <ClubhouseLayout title="Clubs">
        <Head title="Clubs" />
        <div>
                <div
                    v-for="club in clubs.data"
                    :key="club.id"
                    class="flex flex-col space-y-2 py-2 text-white"
                >
                    <h3 class="flex flex-row items-center justify-between">
                        <span
                            class="text-xl"
                            v-text="
                                `${club.name}${club.user_is_admin ? ' (Admin)' : ''}`
                            "
                        />
                        <Link
                            :href="show(club.id)"
                            class="rounded-sm bg-gray-700 px-2 py-1 hover:bg-gray-800"
                            >Show</Link
                        >
                    </h3>
                    <p v-if="club.description" v-text="club.description" />
                    <p
                        v-text="
                            club.users.length +
                            ' member' +
                            (club.users.length === 1 ? '' : 's')
                        "
                    />
                </div>
            <ClubhousePagination :pagination="clubs" />
        </div>
    </ClubhouseLayout>
</template>
