<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import ClubhouseLayout from '@/layouts/ClubhouseLayout.vue';
import type { Paginated, Sport } from '@/types';
import { show } from '@/routes/sport';

defineProps<{ sports: Paginated<Sport> }>();
</script>

<template>
    <ClubhouseLayout title="Sports">
        <Head title="Sports" />
        <div class="flex flex-col divide-y-2 border-gray-700">
            <div
                v-for="sport in sports.data"
                :key="sport.id"
                class="flex flex-col space-y-2 py-2 text-white"
            >
                <h3 class="flex flex-row items-center justify-between">
                    <span
                        class="text-xl"
                        v-text=" sport.name "
                    />
                    <Link
                        :href="show(sport.id)"
                        class="rounded-sm bg-gray-700 px-2 py-1 hover:bg-gray-800"
                        >Show</Link
                    >
                </h3>
                <p v-if="sport.description" v-text="sport.description" />

            </div>
        </div>
    </ClubhouseLayout>
</template>
