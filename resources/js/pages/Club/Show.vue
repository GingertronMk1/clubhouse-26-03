<script setup lang="ts">
import { ref } from 'vue';
import ClubhouseLayout from '@/layouts/ClubhouseLayout.vue';
import type { Club, User, WithPivot } from '@/types';

const props = defineProps<{ club: Club }>();

const clubUsers = ref<WithPivot<User>[]>(props.club.users as WithPivot<User>[]);
</script>

<template>
    <ClubhouseLayout :title="club.name">
        <div class="flex flex-col space-y-2">
            <h3 v-text="club.name" />
            <p v-text="club.description" />
            <hr class="bg-gray-700 my-2" />

            <h5 class="text-lg">Members</h5>
            <ul class="flex flex-col">
                <li v-for="user in clubUsers" :key="user.id">
                    <span class="flex flex-row space-x-2">
                        <span v-text="user.name" />
                        <span class="uppercase" v-text="user.pivot.type" />
                    </span>
                </li>
            </ul>
        </div>
    </ClubhouseLayout>
</template>

<style scoped></style>
