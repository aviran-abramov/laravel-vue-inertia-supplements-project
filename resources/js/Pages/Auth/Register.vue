<script setup lang="ts">
import FormLabel from '@/Components/Forms/FormLabel.vue';
import { IRegisterForm } from '@/interfaces/forms';
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm<IRegisterForm>({
    email: null,
    first_name: null,
    last_name: null,
    password: null,
    password_confirmation: null
});
</script>

<template>
    <AppLayout>
        <form @submit.prevent="form.post('register')" class="space-y-4 border border-black rounded w-[400px] mx-auto py-4 flex flex-col items-center">
            <!-- First Name -->
            <div>
                <FormLabel htmlFor="email">Email Address</FormLabel>
                <input
                    v-model="form.email"
                    type="email"
                    name="email"
                    id="email"
                    placeholder="johndoe@gmail.com"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
                <p v-if="form.errors.email" class="text-red-500 text-sm mt-1">* {{ form.errors.email }}</p>
            </div>

            <!-- Last Name -->
            <div>
                <FormLabel htmlFor="first_name">First Name</FormLabel>
                <input
                    v-model="form.first_name"
                    type="text"
                    name="first_name"
                    id="first_name"
                    placeholder="John"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
                <p v-if="form.errors.first_name" class="text-red-500 text-sm mt-1">* {{ form.errors.first_name }}</p>
            </div>

            <!-- Last Name -->
            <div>
                <FormLabel htmlFor="last_name">Last Name</FormLabel>
                <input
                    v-model="form.last_name"
                    type="text"
                    name="last_name"
                    id="last_name"
                    placeholder="Doe"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
                <p v-if="form.errors.last_name" class="text-red-500 text-sm mt-1">* {{ form.errors.last_name }}</p>
            </div>

            <!-- Password -->
            <div>
                <FormLabel htmlFor="password">Password</FormLabel>
                <input
                    v-model="form.password"
                    type="password"
                    name="password"
                    id="password"
                    placeholder="123456"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
                <p v-if="form.errors.password" class="text-red-500 text-sm mt-1">* {{ form.errors.password }}</p>
            </div>

            <!-- Password -->
            <div>
                <FormLabel htmlFor="password_confirmation">Confirm Password</FormLabel>
                <input
                    v-model="form.password_confirmation"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="123456"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
                <p v-if="form.errors.password_confirmation" class="text-red-500 text-sm mt-1">* {{ form.errors.password_confirmation }}</p>
            </div>

            <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-bold text-white hover:bg-green-500">Register</button>
        </form>
    </AppLayout>
</template>
