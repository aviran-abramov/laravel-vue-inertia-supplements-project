<script setup lang="ts">
import FormError from '@/Components/Forms/FormError.vue';
import FormInput from '@/Components/Forms/FormInput.vue';
import FormLabel from '@/Components/Forms/FormLabel.vue';
import FormSubmitButton from '@/Components/Forms/FormSubmitButton.vue';
import { IRegisterForm } from '@/interfaces/forms';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm<IRegisterForm>({
    email: null,
    first_name: null,
    last_name: null,
    password: null,
    password_confirmation: null
});
</script>

<template>
    <Head title="Register" />

    <AppLayout title="Register">
        <form @submit.prevent="form.post(route('register.store'))" class="space-y-4 border border-black rounded w-[400px] mx-auto py-4 flex flex-col items-center">
            <!-- Email Address -->
            <div>
                <FormLabel htmlFor="email">Email Address</FormLabel>

                <FormInput
                    v-model="form.email"
                    type="email"
                    name="email"
                    id="email"
                    placeholder="johndoe@gmail.com"
                />

                <FormError v-if="form.errors.email">{{ form.errors.email }}</FormError>
            </div>

            <!-- First Name -->
            <div>
                <FormLabel htmlFor="first_name">First Name</FormLabel>

                <FormInput
                    v-model="form.first_name"
                    type="text"
                    name="first_name"
                    id="first_name"
                    placeholder="John"
                />

                <FormError v-if="form.errors.first_name">{{ form.errors.first_name }}</FormError>
            </div>

            <!-- Last Name -->
            <div>
                <FormLabel htmlFor="last_name">Last Name</FormLabel>

                <FormInput
                    v-model="form.last_name"
                    type="text"
                    name="last_name"
                    id="last_name"
                    placeholder="Doe"
                />

                <FormError v-if="form.errors.last_name">{{ form.errors.last_name }}</FormError>
            </div>

            <!-- Password -->
            <div>
                <FormLabel htmlFor="password">Password</FormLabel>

                <FormInput
                    v-model="form.password"
                    type="password"
                    name="password"
                    id="password"
                    placeholder="123456"
                />

                <FormError v-if="form.errors.password">{{ form.errors.password }}</FormError>
            </div>

            <!-- Password Confirmation -->
            <div>
                <FormLabel htmlFor="password_confirmation">Confirm Password</FormLabel>

                <FormInput
                    v-model="form.password_confirmation"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="123456"
                />

                <FormError v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</FormError>
            </div>

            <FormSubmitButton>Register</FormSubmitButton>
        </form>
    </AppLayout>
</template>
