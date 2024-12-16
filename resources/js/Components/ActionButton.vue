<script setup lang="ts">
import { computed } from 'vue';

interface IActionButton {
    variant?: 'show';
}

const { variant = 'gray' } = defineProps<IActionButton>();

const classes = computed(() => {
    const baseClasses = "rounded-md px-3 py-2 text-sm font-bold text-white";

    const variantClasses = variant === 'show'
        ? 'bg-blue-500 hover:bg-blue-600'
        : 'bg-gray-500 hover:bg-gray-600';

    return `${baseClasses} ${variantClasses}`;
});
</script>

<template>
    <button type="button" :class="classes">
        <slot />
    </button>
</template>
