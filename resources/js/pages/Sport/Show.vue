<script setup lang="ts">
import ClubhouseLayout from '@/layouts/ClubhouseLayout.vue';
import type { Sport } from '@/types';

defineProps<{ sport: Sport }>();
</script>

<template>
    <ClubhouseLayout :title="sport.name">
        <div class="flex flex-col space-y-2">
            <h3 v-text="sport.name" />
            <p v-text="sport.description" />
            <hr class="my-2 bg-gray-700" />
            <h4 class="text-lg">Scoring</h4>
            <table class="table w-60 text-left">
                <thead>
                    <tr>
                        <th>Scoring event</th>
                        <th>Points</th>
                    </tr>
                </thead>
                <tbody>
                <tr v-for="(points, event) in sport.scoring" :key="event">
                    <td v-text="event" />
                    <td v-text="points" />
                </tr>
                </tbody>
            </table>
        </div>
    </ClubhouseLayout>
</template>
