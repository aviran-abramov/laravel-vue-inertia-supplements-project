<script setup lang="ts">
import FormError from '@/Components/Forms/FormError.vue';
import FormInput from '@/Components/Forms/FormInput.vue';
import FormLabel from '@/Components/Forms/FormLabel.vue';
import FormSubmitButton from '@/Components/Forms/FormSubmitButton.vue';
import FormTextarea from '@/Components/Forms/FormTextarea.vue';
import { ISupplement } from '@/interfaces/supplements';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm<ISupplement>({
    name: null,
    description: null,
    additional_info_1: null,
    additional_info_2: null
});
</script>

<template>
    <Head title="New Supplement" />

    <AppLayout title="New Supplement">
        <form @submit.prevent="form.post(route('supplements.store'))" class="space-y-4 border border-black rounded w-[400px] mx-auto py-4 flex flex-col items-center">
            <!-- Name -->
            <div>
                <FormLabel htmlFor="name">Supplement Name</FormLabel>

                <FormInput
                    v-model="form.name"
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Ashwagandha"
                />

                <FormError v-if="form.errors.name">{{ form.errors.name }}</FormError>
            </div>

            <!-- Description -->
            <div>
                <FormLabel htmlFor="description">Description</FormLabel>

                <FormTextarea
                    v-model="form.description"
                    id="description"
                    name="description"
                    placeholder="Herb that promotes relaxation, helps with mental clarity, reduces stress and cortisol levels."
                    rows="3"
                />

                <FormError v-if="form.errors.description">{{ form.errors.description }}</FormError>
            </div>

            <!-- Additional info 1 -->
            <div>
                <FormLabel htmlFor="description">Additional Info 1</FormLabel>

                <FormTextarea
                    v-model="form.additional_info_1"
                    id="additional_info_1"
                    name="additional_info_1"
                    placeholder="Ashwagandha is an adaptogenic herb used in Ayurvedic medicine to help the body adapt to stress and improve overall resilience."
                    rows="4"
                />

                <FormError v-if="form.errors.additional_info_1">{{ form.errors.additional_info_1 }}</FormError>
            </div>

            <!-- Additional info 2 -->
            <div>
                <FormLabel htmlFor="description">Additional Info 2</FormLabel>

                <FormTextarea
                    v-model="form.additional_info_2"
                    id="additional_info_2"
                    name="additional_info_2"
                    placeholder="Studies suggest regular use may enhance sleep quality, support cognitive function, and balance mood by regulating stress hormones."
                    rows="4"
                />

                <FormError v-if="form.errors.additional_info_2">{{ form.errors.additional_info_2 }}</FormError>
            </div>
            
            <FormSubmitButton :processing="form.processing">Create</FormSubmitButton>
        </form>
    </AppLayout>
</template>
