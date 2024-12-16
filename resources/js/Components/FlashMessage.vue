<template>
    <div role="alert" class="alert border border-green-600 mb-6 bg-white mx-auto max-w-[920px]">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 shrink-0 stroke-current text-green-600"
            fill="none"
            viewBox="0 0 24 24"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        <span class="font-bold text-green-600">
            <slot />
        </span>
    </div>
</template>
