<script setup lang="ts">
import { Link, router } from '@inertiajs/vue3';
import { logout } from '@/routes';
import { index as clubIndex } from '@/routes/club';
import type { RouteDefinition } from '@/wayfinder';
import { index as sportIndex } from '@/routes/sport';

const handleLogout = () => {
    router.flushAll();
};

const links: { name: string; href: RouteDefinition<'get'> }[] = [
    {
        name: 'Clubs',
        href: clubIndex(),
    },
    {
        name: 'Sports',
        href: sportIndex(),
    },
];
</script>

<template>
    <aside class="flex h-full min-w-60 flex-col space-y-2 bg-gray-800 p-4">
        <h2 class="text-2xl">Clubhouse</h2>
        <hr class="border-gray-700" />
        <nav class="flex flex-col">
            <template v-for="link in links" :key="link.name">
                <Link :href="link.href"> {{ link.name }} </Link>
            </template>
        </nav>
        <div v-if="$page.props.auth.user" class="mt-auto">
            <Link
                class="w-full cursor-pointer"
                :href="logout()"
                @click="handleLogout"
            >
                Log out {{ $page.props.auth.user.name }}
            </Link>
        </div>
    </aside>
</template>
