<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
        required: true,
    }
})

const classes = computed(() => {
    const defaultClasses = 'rounded-md px-3 py-2 text-sm font-medium';
    const activeClasses = props.active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';

    return `${defaultClasses} ${activeClasses}`;
});
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
