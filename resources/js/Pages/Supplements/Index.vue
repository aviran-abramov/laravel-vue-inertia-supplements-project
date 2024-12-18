<script setup lang="ts">
import FlashMessage from '@/Components/FlashMessage.vue';
import SupplementCard from '@/Components/Supplements/SupplementCard.vue';
import { ISupplement } from '@/interfaces/supplements';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { ref, watch } from 'vue';

const { supplements } = defineProps<{
    supplements: ISupplement[]
}>();

const showFlashMessage = ref(false);
const flashMessage = ref<string|null|undefined>(null);

watch(
    () => usePage().props.flash.message,
    (newMessage) => {
        if (newMessage) {
            flashMessage.value = newMessage;
            showFlashMessage.value = true;
            setTimeout(() => {
                flashMessage.value = null;
                showFlashMessage.value = false;
                usePage().props.flash.message = undefined;
            }, 3000);
        }
    },
    { immediate: true }
)
</script>

<template>
    <Head title="Supplements List" />

    <AppLayout title="Supplements List">
        <!-- Flash message in case of any successful action -->
        <FlashMessage v-if="flashMessage && showFlashMessage">{{ flashMessage }}</FlashMessage>

        <section v-if="supplements">
            <!-- Supplements Container -->
            <div class="flex flex-wrap justify-center gap-4">
                <SupplementCard
                    v-for="supplement in supplements"
                    :key="supplement.id"
                    :supplement
                />
            </div>
        </section>

        <p v-else>No supplements found yet.</p>
    </AppLayout>
</template>
