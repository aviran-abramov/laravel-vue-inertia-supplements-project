<script setup lang="ts">
import { IFormSubmitButton } from '@/interfaces/forms';

const { processing } = defineProps<IFormSubmitButton>()
</script>

<template>
    <button :disabled="processing" type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-bold text-white hover:bg-green-500 disabled:bg-gray-400">
        <span v-if="!processing">
            <slot />
        </span>

        <span v-else disabled>Processing...</span>
    </button>
</template>
