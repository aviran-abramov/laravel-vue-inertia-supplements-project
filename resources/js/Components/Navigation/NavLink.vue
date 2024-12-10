<script setup lang="ts">
import { INavLink } from '@/interfaces/nav';
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const { href, active } = defineProps<INavLink>();

const classes = computed(() => {
    const baseClasses = 'rounded-md px-3 py-2 text-sm font-medium';
    const activeClasses = active
        ? 'bg-gray-900 text-white'
        : 'text-gray-300 hover:bg-gray-700 hover:text-white';

    return `${baseClasses} ${activeClasses}`;
});
</script>

<template>
    <Link
        :href
        :class="classes"
        :aria-current="active ? 'page' : null"
    >
        <slot />
    </Link>
</template>
