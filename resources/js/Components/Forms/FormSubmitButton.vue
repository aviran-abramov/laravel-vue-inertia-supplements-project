<script setup lang="ts">
import { IFormSubmitButton } from '@/interfaces/forms';
import { computed } from 'vue';

const { processing = false, variant = 'default' } = defineProps<IFormSubmitButton>()

const classes = computed(() => {
    const baseClasses = "rounded-md px-3 py-2 text-sm font-bold text-white";

    let variantClasses: string;

    if (variant === 'delete') {
        variantClasses = 'bg-red-600 hover:bg-red-500'; // Delete variant: Red styling
    } else if (variant === 'update') {
        variantClasses = 'bg-orange-600 hover:bg-orange-500'; // Update variant: Orange styling
    } else {
        variantClasses = 'bg-green-600 hover:bg-green-500'; // Default variant: Green styling
    }
    return `${baseClasses} ${variantClasses}`;
});
</script>

<template>
    <button :disabled="processing" type="submit" :class="classes">
        <span v-if="!processing">
            <slot />
        </span>

        <span v-else disabled class="loading loading-spinner loading-sm"></span>
    </button>
</template>
