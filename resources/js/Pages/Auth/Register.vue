<script setup lang="ts">
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
                <label for="email" class="block font-medium text-gray-900">Email Address</label>
                <input
                    v-model="form.email"
                    type="email"
                    name="email"
                    id="email"
                    placeholder="johndoe@gmail.com"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
            </div>

            <!-- Last Name -->
            <div>
                <label for="first_name" class="block font-medium text-gray-900">First Name</label>
                <input
                    v-model="form.first_name"
                    type="text"
                    name="first_name"
                    id="first_name"
                    placeholder="John"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
            </div>

            <!-- Last Name -->
            <div>
                <label for="last_name" class="block font-medium text-gray-900">Last Name</label>
                <input
                    v-model="form.last_name"
                    type="text"
                    name="last_name"
                    id="last_name"
                    placeholder="Doe"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block font-medium text-gray-900">Password</label>
                <input
                    v-model="form.password"
                    type="password"
                    name="password"
                    id="password"
                    placeholder="123456"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
            </div>

            <!-- Password -->
            <div>
                <label for="password_confirmation" class="block font-medium text-gray-900">Confirm Password</label>
                <input
                    v-model="form.password_confirmation"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="123456"
                    class="mt-1 block w-80 rounded bg-white px-3 py-1.5 text-gray-900 outline outline-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-green-400"
                />
            </div>

            <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-bold text-white hover:bg-green-500">Register</button>

        </form>
    </AppLayout>
</template>
