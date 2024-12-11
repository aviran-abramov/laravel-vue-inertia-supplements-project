<script setup lang="ts">
import { ISupplement } from '@/interfaces/supplements';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';

const { supplements } = defineProps<{
    supplements: ISupplement[]
}>()
</script>

<template>
    <Head title="Supplements List" />

    <AppLayout title="Supplements List">
        
    </AppLayout>
</template>
