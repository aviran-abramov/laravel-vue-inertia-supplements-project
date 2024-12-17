<script setup lang="ts">
import AppNavigation from '@/Components/Navigation/AppNavigation.vue';
import { IAppLayout } from '@/interfaces/layouts';

const props = defineProps<IAppLayout>();
</script>

<template>
    <div class="min-h-full bg-slate-50">
        <AppNavigation />

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ props.title || 'Dashboard' }}</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <slot />
            </div>
        </main>
    </div>
</template>
