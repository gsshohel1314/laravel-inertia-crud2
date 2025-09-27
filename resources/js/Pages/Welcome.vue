<script setup>
import AppLayout from '../Layouts/App.vue';

defineOptions({layout: AppLayout})
</script>

<template>
    <section class="mx-auto max-w-screen-xl px-4 py-16 text-center">
        <h1 class="mb-4 text-3xl font-extrabold tracking-tight md:text-5xl">
            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Practice
                professional layouts</span>
        </h1>
        <p class="mx-auto mb-8 max-w-2xl text-gray-600">A clean Vue 3 + Tailwind starting point with a
            responsive navbar, flexible content area, and a footer that stays put.</p>
        <div class="flex flex-col items-center justify-center gap-3 sm:flex-row">
            <a href="#"
                class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700">
                Start building
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <a href="#"
                class="inline-flex items-center gap-2 rounded-md px-4 py-2 ring-1 ring-gray-300 hover:bg-gray-100">
                View examples </a>
        </div>
    </section>

    <section class="mx-auto max-w-screen-xl px-4 pb-16">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
            <div class="rounded-xl border bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                <div class="mb-3 flex items-center gap-3">
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6l4 2" />
                        </svg>
                    </span>
                    <h3 class="font-semibold">Responsive by default</h3>
                </div>
                <p class="text-sm text-gray-600">Practice mobile-first layouts with a flexible grid and modern
                    utility classes.</p>
            </div>
            <div class="rounded-xl border bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                <div class="mb-3 flex items-center gap-3">
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-50 text-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                    </span>
                    <h3 class="font-semibold">Clean components</h3>
                </div>
                <p class="text-sm text-gray-600">Tidy, minimal markup that you can extend as you learn new
                    patterns.</p>
            </div>
            <div class="rounded-xl border bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                <div class="mb-3 flex items-center gap-3">
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-50 text-emerald-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v18m9-9H3" />
                        </svg>
                    </span>
                    <h3 class="font-semibold">Extend easily</h3>
                </div>
                <p class="text-sm text-gray-600">Add sections, cards, and layouts without fighting the base
                    structure.</p>
            </div>
        </div>
    </section>
</template>