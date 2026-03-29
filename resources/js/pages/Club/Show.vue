<script setup lang="ts">
import type { Club } from '@/types';

defineProps<{ club: Club }>();
</script>

<template>
    <h3 v-text="club.name" />
</template>

<style scoped></style>
