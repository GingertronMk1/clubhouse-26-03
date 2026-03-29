<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import { logout } from '@/routes';
import { index } from '@/routes/club';

const handleLogout = () => {
    router.flushAll();
};
</script>

<template>
    <aside class="flex h-full min-w-60 flex-col space-y-2 bg-gray-800 p-4">
        <h2 class="text-2xl">Clubhouse</h2>
        <hr class="border-gray-700" />
        <ul class="flex flex-col">
            <Link :href="index()"> Clubs </Link>
        </ul>
        <div class="mt-auto">
            <Link
                class="w-full cursor-pointer"
                :href="logout()"
                @click="handleLogout"
            >
                Log out
            </Link>
        </div>
    </aside>
</template>

<style scoped></style>
