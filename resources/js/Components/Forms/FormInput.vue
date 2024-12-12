<script setup lang="ts">
import { IFormInput } from '@/interfaces/forms';

defineProps<IFormInput>()

const model = defineModel<string|null>({ required: true });
</script>

<template>
    <input
        v-model="model"
        :type
        :name
        :id
        :placeholder
        class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
    />
</template>

