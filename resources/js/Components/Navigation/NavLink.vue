<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

defineProps({
    href: String,
    active: Boolean
});
</script>

<template>
    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
    <Link
        :href="href"
        :class="['rounded-md px-3 py-2 text-sm font-medium', active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white']"
    >
        <slot />
    </Link>
</template>
