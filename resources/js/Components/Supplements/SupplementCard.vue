<script setup lang="ts">
import { ISupplement } from '@/interfaces/supplements';
import FormSubmitButton from '../Forms/FormSubmitButton.vue';
import { Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import ActionButton from '../ActionButton.vue';
import NavLink from '../Navigation/NavLink.vue';

const { supplement } = defineProps<{ supplement: ISupplement }>();

const showModal = ref(false);
const triggerModal = () => showModal.value = !showModal.value;

</script>

<template>
    <div class="border rounded border-black bg-white p-2 w-[300px] flex flex-col justify-between">
        <!-- Text -->
        <div>
            <h3 class="text-lg font-semibold">{{ supplement.name }}</h3>
            <p class="mt-0.5 text-gray-600 text-sm">{{ supplement.description }}</p>
        </div>

        <!-- Buttons -->
        <div class="mt-3 flex items-center gap-1">
            <ActionButton variant="show" @click="triggerModal">Show</ActionButton>

            <Link class="rounded-md px-3 py-2 text-sm font-bold text-white bg-purple-500 hover:bg-purple-600" :href="route('supplements.edit', supplement.id)">Edit</Link>

            <FormSubmitButton @click="router.delete(route('supplements.destroy', supplement.id))" variant="delete">Delete</FormSubmitButton>
        </div>
    </div>

    <!-- Modal -->
    <dialog v-if="showModal" class="fixed inset-0 modal" open>
        <!-- Darker background -->
        <div class="fixed inset-0 bg-black bg-opacity-50" @click="triggerModal"></div>

        <div class="modal-box max-w-4xl border-2 border-black">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" @click="triggerModal">✕</button>
            <h3 class="text-2xl font-bold">{{ supplement.name }}</h3>
            <p class="py-4">{{ supplement.description }}</p>
            <p>
                <strong>More Info:</strong>
            </p>

            <div class="space-y-2 mt-2">
                <p>{{ supplement.additional_info_1 }}</p>

                <p>{{ supplement.additional_info_2 }}</p>
            </div>

            <!-- Buttons -->
             <div class="mt-3 flex items-center gap-1">
                <Link class="rounded-md px-3 py-2 text-sm font-bold text-white bg-purple-500 hover:bg-purple-600" :href="route('supplements.edit', supplement.id)">Edit</Link>

                <FormSubmitButton @click="router.delete(route('supplements.destroy', supplement.id))" variant="delete">Delete</FormSubmitButton>

                <ActionButton @click="triggerModal">Close</ActionButton>
             </div>
        </div>
    </dialog>
</template>
