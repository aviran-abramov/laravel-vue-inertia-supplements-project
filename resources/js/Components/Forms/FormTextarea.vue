<script setup lang="ts">

const model = defineModel<string|null>();

interface IFormTextarea {
    id: string;
    name: string;
    placeholder: string;
    rows: string;
}

const { id, name, placeholder, rows } = defineProps<IFormTextarea>();
</script>

<template>
<textarea
    v-model="model"
    :id
    :name
    :placeholder
    :rows
    class="w-80 rounded outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"></textarea>
</template>
