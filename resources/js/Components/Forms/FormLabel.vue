<script setup lang="ts">
import { IFormLabel } from '@/interfaces/forms';

defineProps<IFormLabel>()
</script>

<template>
    <label :for="htmlFor" class="block font-medium text-gray-900">
        <slot />
    </label>
</template>
