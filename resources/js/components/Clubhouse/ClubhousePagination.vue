<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
import type { Paginated } from '@/types';

const props = withDefaults(defineProps<{
    pagination: Paginated<any>;
    linksEitherSide?: number;
}>(), {
    linksEitherSide: 2,
});

const activeLinksEitherSide = computed(function () {
    const links = props.pagination.links.filter((link) =>
        link.label.match(/^\d+$/),
    );
    const activeIndex = links.findIndex((link) => link.active);

    return links.filter((_, index) =>
        activeIndex - props.linksEitherSide <= index
        && index <= activeIndex + props.linksEitherSide
    );
});
</script>

<template>
    <div class="flex flex-row space-x-2">
        <Link :href="pagination.first_page_url">First</Link>
        <Link v-if="pagination.prev_page_url" :href="pagination.prev_page_url">
            Prev
        </Link>
        <template v-for="link in activeLinksEitherSide" :key="link.url">
            <Link
                v-if="link.url"
                :href="link.url"
                :class="{ 'font-bold': link.active }"
                >
                {{ link.label }}
            </Link>
        </template>

        <Link v-if="pagination.next_page_url" :href="pagination.next_page_url">
            Next
        </Link>
        <Link :href="pagination.last_page_url">Last</Link>
    </div>
</template>
