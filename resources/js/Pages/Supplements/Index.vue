<script setup lang="ts">
import FlashMessage from '@/Components/FlashMessage.vue';
import SupplementCard from '@/Components/Supplements/SupplementCard.vue';
import { ISupplement } from '@/interfaces/supplements';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';

const { supplements } = defineProps<{
    supplements: ISupplement[]
}>();

const flashMessageIsVisible = ref(true);

onMounted(() => {
    if (usePage().props.flash.message) {
        setTimeout(() => flashMessageIsVisible.value = false, 3000);
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
