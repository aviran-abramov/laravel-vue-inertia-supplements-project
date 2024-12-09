<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps<{
    href: string,
    active: boolean
}>();

const classes = computed(() => {
    const baseClasses = 'rounded-md px-3 py-2 text-sm font-medium';
    const activeClasses = props.active
        ? 'bg-gray-900 text-white'
        : 'text-gray-300 hover:bg-gray-700 hover:text-white';

    return `${baseClasses} ${activeClasses}`;
});
</script>

<template>
    <Link
        :href="href"
        :class="classes"
        :aria-current="props.active ? 'page' : null"
    >
        <slot />
    </Link>
</template>
