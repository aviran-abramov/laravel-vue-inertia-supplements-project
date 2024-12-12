<script setup lang="ts">
import FlashMessage from '@/Components/FlashMessage.vue';
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
        <!-- Flash message in case of any successful action -->
        <FlashMessage v-if="$page.props.flash.message">{{ $page.props.flash.message }}</FlashMessage>

        <section v-if="supplements">
            <!-- Supplements Container -->
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Supplement Card -->
                <div v-for="supplement in supplements" :key="supplement.id" class="border rounded border-green-700 p-2 w-[300px]">
                    <h3 class="text-lg font-semibold">{{ supplement.name }}</h3>
                    <p class="mt-0.5 text-gray-600 text-sm">{{ supplement.description }}</p>
                </div>
            </div>
        </section>

        <p v-else>No supplements found yet.</p>
    </AppLayout>
</template>
