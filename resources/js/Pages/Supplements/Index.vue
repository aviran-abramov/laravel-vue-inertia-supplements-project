<script setup lang="ts">
import FlashMessage from '@/Components/FlashMessage.vue';
import SupplementCard from '@/Components/Supplements/SupplementCard.vue';
import { ISupplement } from '@/interfaces/supplements';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { onMounted, ref, watch } from 'vue';

const { supplements } = defineProps<{
    supplements: ISupplement[]
}>();

const flashMessageIsVisible = ref(true);

watch(() => usePage().props.flash.message, (newValue) => {
    if (newValue) {
        flashMessageIsVisible.value = true;
        setTimeout(() =>  {
            flashMessageIsVisible.value = false;
            usePage().props.flash.message = undefined;
        }, 3000);
    }
});
</script>

<template>
    <Head title="Supplements List" />

    <AppLayout title="Supplements List">
        <!-- Flash message in case of any successful action -->
        <FlashMessage v-if="$page.props.flash.message && flashMessageIsVisible">{{ $page.props.flash.message }}</FlashMessage>

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
