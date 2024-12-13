<script setup lang="ts">
import { ISupplement } from '@/interfaces/supplements';

const { supplement } = defineProps<{ supplement: ISupplement }>();
</script>

<template>
    <div class="border rounded border-green-700 p-2 w-[300px]">
        <h3 class="text-lg font-semibold">{{ supplement.name }}</h3>
        <p class="mt-0.5 text-gray-600 text-sm">{{ supplement.description }}</p>
    </div>
</template>
