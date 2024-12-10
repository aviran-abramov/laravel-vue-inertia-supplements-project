<script setup lang="ts">
import { IFormInput } from '@/interfaces/forms';

defineProps<IFormInput>()

const model = defineModel();
</script>

<template>
    <input
        v-model="model"
        :type="type"
        :name="name"
        :id="id"
        :placeholder="placeholder"
        class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
    />
</template>
