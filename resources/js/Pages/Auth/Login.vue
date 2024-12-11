<script setup lang="ts">
import FormError from '@/Components/Forms/FormError.vue';
import FormInput from '@/Components/Forms/FormInput.vue';
import FormLabel from '@/Components/Forms/FormLabel.vue';
import FormSubmitButton from '@/Components/Forms/FormSubmitButton.vue';
import { ILoginForm } from '@/interfaces/forms';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm<ILoginForm>({
    email: null,
    password: null
});
</script>

<template>
    <Head title="Login" />

    <AppLayout title="Login">
        <form @submit.prevent="form.post(route('session.store'))" class="space-y-4 border border-black rounded w-[400px] mx-auto py-4 flex flex-col items-center">
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

                <FormError v-if="form.errors.email" >{{ form.errors.email }}</FormError>
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

            <FormSubmitButton>Login</FormSubmitButton>
        </form>
    </AppLayout>
</template>
