<script setup lang="ts">
import { ISupplement } from '@/interfaces/supplements';
import FormSubmitButton from '../Forms/FormSubmitButton.vue';
import { router } from '@inertiajs/vue3';

const { supplement } = defineProps<{ supplement: ISupplement }>();
</script>

<template>
    <div class="border rounded border-green-700 p-2 w-[300px] flex flex-col justify-between">
        <!-- Text -->
        <div>
            <h3 class="text-lg font-semibold">{{ supplement.name }}</h3>
            <p class="mt-0.5 text-gray-600 text-sm">{{ supplement.description }}</p>
        </div>

        <!-- Buttons -->
        <div class="mt-2">
            <FormSubmitButton @click="router.delete(route('supplements.destroy', supplement.id))" variant="delete">Delete</FormSubmitButton>
        </div>
    </div>
</template>
